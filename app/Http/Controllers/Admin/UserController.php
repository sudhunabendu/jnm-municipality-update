<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{

    public function getUsers(Request $request){
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }


    public function createUser(Request $request){
        $permissions = Permission::orderBy('name')->get();
        return view('admin.users.add',compact('permissions'));
    }

    public function storeUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        //return $request->all();
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // assign role
        $user->assignRole($request->role);   // example: admin

        // assign permissions (if selected)
        if ($request->permissions) {
            $user->givePermissionTo($request->permissions);
        }

        return back()->with('success','User created successfully');
    }
}
