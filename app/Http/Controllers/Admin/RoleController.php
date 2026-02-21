<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }


    public function addRole(){
        $permissions = Permission::all();
        return view('admin.roles.add', compact('permissions'));
    }

    public function createRole(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $name = $request->name ?? "";
        $role = Role::create(['name' => $name]);
        if($role){
            return redirect()->route('admin.roles')->with('success', 'Role created successfully');
        }else {
            return redirect()->route('admin.roles')->with('error', 'Role creation failed');
        }
    }
}
