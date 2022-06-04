<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use App\Http\Requests\RoleStoreRequest;
use App\Http\Requests\RoleUpdateRequest;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->authorizeResource(Role::class, 'role');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate(10)
            ->appends($this->permittedRequestParams(['page']));

        return view('admin.role.index', [
            'roles'  => $roles,
            'params' => $this->permittedRequestParams(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create', [
            'permissions' => Permission::all(),
            'params'      => $this->permittedRequestParams()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  RoleStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleStoreRequest $request)
    {
        $role = Role::create([
            'name' => $request->name,
        ]);

        $role->syncPermissions($request->permissions);

        return to_route('admin.roles.index', $this->permittedRequestParams())
            ->with('success', __('admin.roles.create.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.role.edit', [
            'role'        => $role,
            'permissions' => Permission::all(),
            'params'      => $this->permittedRequestParams()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  RoleUpdateRequest  $request
     * @param  Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(RoleUpdateRequest $request, Role $role)
    {
        $role->update([
            'name' => $request->name,
        ]);

        $role->syncPermissions($request->permissions);

        return to_route('admin.roles.index', $this->permittedRequestParams())
            ->with('success', __('admin.role.edit.success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $route = to_route('admin.roles.index', $this->permittedRequestParams());

        if (!$role->delete()) {
            return $route->with('danger', __('admin.role.delete.danger'));
        }

        return $route->with('success', __('admin.role.delete.success'));
    }
}
