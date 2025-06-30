<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class AdminAccessController extends Controller
{
    public function index()
    {
        $admins = \App\Models\Admin::all();
        $roles = \Spatie\Permission\Models\Role::all();
        // return view('bac.access.index', compact('admins', 'roles'));
        return view('backend.access.index', compact('admins', 'roles'));
    }

    public function assign(Request $request)
    {
        $admin = \App\Models\Admin::find($request->admin_id);
        $admin->syncRoles($request->roles);
        return back()->with('success', 'Roles assigned successfully');
    }


    public function permissionToRoleForm()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();

        return view('backend.access.permission-to-role', compact('roles', 'permissions'));
    }

    public function assignPermissionsToRole(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'role_id' => 'required|exists:roles,id',
            'permissions' => 'array',
            'permissions.*' => 'exists:permissions,name',
        ]);

        $role = \Spatie\Permission\Models\Role::findById($request->role_id, 'admin');
        $role->syncPermissions($request->permissions);

        return back()->with('success', 'Permissions updated for role');
    }

    public function getRolePermissions($id)
    {
        try {
            $role = Role::findById($id, 'admin');
            return response()->json([
                'permissions' => $role->permissions->pluck('name')
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Role not found'], 404);
        }
    }
}
