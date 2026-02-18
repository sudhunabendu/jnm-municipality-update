<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // The user is logged in...
            return redirect('admin/dashboard');
        }

        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
    }

    public function insert(){
        $data = new User();
        $data->name = 'Admin';
        $data->email = 'Admin@yopmail.com';
        $data->password = Hash::make("password");
        $data->status = 'Active';
        $data->save();
    }


    public function createRole(){
        $role = Role::create(['name' => 'user']);
        return $role;
    }

    public function assignRole(){
        $user = User::find(1);
        $user->assignRole('super-admin');
        return $user;
    }


    public function createPermission(){
        //$permission = Permission::create(['name' => 'gallery-create']);
        //$permission = Permission::create(['name' => 'gallery-view']);
        //$permission = Permission::create(['name' => 'gallery-edit']);
        //$permission = Permission::create(['name' => 'gallery-delete']);
        //return $permission;
        $user = User::where('name','Spandan Chatterjee')->first();
        $user->getAllPermissions();
        $user->getRoleNames();
        return $user;
    }
}
