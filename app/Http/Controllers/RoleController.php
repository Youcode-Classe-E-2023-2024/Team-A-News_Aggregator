<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('pages.manage_roles');
    }

    public function create_role(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|max:40|min:5|unique:roles,name',
            'permissions.*' => 'string'
        ]);
        if ($request->permissions !== null) {
            Role::create(['name' => $request->role_name]);
            Role::findByName($request->role_name)->givePermissionTo($request->permissions);

            return back()->with('success', 'Role created successfully ^^');
        } else {
            return back()->with('permissions', 'You must choose at least one permission !!!');
        }
    }


    public function destroy_role(Request $request)
    {
        $role = Role::findById($request->role_id);
        if ($role->name !== 'Admin') {
            $role->delete();
            return back()->with('success', 'Role was deleted !!!');
        } else {
            return back()->with('error', 'Can not deleted the Admin role');
        }
    }
}
