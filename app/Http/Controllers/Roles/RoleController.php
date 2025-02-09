<?php

namespace App\Http\Controllers\Roles;

use App\Models\Roles\Role;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Controller;
use App\DataTables\Roles\RoleDataTable;
use App\DataTables\Roles\RoleTrashedDataTable;
use App\Http\Requests\Roles\RoleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(RoleDataTable $dataTable)
    {
        return $dataTable->render('auth.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = new Role();
        return view('auth.roles.create', [
            'role' => $role
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create(
            $request->validated()
                +   ['code' => uniqueCode(8, 'number')]
                +   ['slug' => Str::slug($request->name)]
                +   ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('role.create')->with('success', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('auth.roles.show', [
            'role' => $role
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('auth.roles.edit', [
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update(
            $request->validated()
                +   ['slug' => Str::slug($request->name)]
                +   ['note' => $request->note ? null : 'N/A']
        );

        return redirect()->route('role.edit', ['role' => $role])->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('role.index')->with('success', 'Role deleted successfully');
    }

    /**
     * Display a listing resource from trash.
     */
    public function trashed(RoleTrashedDataTable $dataTable)
    {
        return $dataTable->render('auth.roles.trashed');
    }

    /**
     * Restore the specified resource from trash.
     */
    public function restore($id)
    {
        $role = Role::withTrashed()->find($id);
        $role->restore();

        return redirect()->route('role.trashed')->with('success', 'Role restored successfully');
    }
}
