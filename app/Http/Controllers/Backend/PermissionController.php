<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;

class PermissionController extends Controller
{
    public function assignPermissionToRole(Request $request)
    {
        $role = Role::findById($request->role_id);
        $role->syncPermissions($request->permissions);
    }

    public function index()
    {
        $permissions = Permission::all();
        // return view('admin.permissions.index', compact('permissions'));
        return view('backend.permission.index', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create([
            'name' => $request->name,
            'guard_name' => 'admin'
        ]);

        return back()->with('success', 'Permission added successfully');
    }
}
