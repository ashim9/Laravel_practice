<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{
    // Read
    public function index(){
        $data['roles'] = Role::all();
        return view('role.index', $data);
    }

    // Create form showing
    public function create(){
        $data['permissions'] = Permission::pluck('name','id');
        return view('role.create', $data);
    }

    // Create
    public function store(Request $request){
        $Role = Role::create($request->all());
        $Role->permissions()->attach($request->permission_id);
        return redirect()->route('roles');
    }

    // Update form showing
    public function edit($id){
        $data['role'] = Role::find($id);
        $data['permissions'] = Permission::pluck('name','id');
        $data['permission_role'] = $data['role']->permissions->pluck('id','id')->toArray();
        return view('role.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $role = Role::find($id);
        $role->update($request->all());
        $role->permissions()->sync($request->permission_id);
        return redirect()->route('roles');
    }
    // Delete
    public function delete($id){
        $role = Role::find($id);
        $role->permissions()->detach();
        $role->delete();
        return redirect()->route('roles');
    }
}
