<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    // Read
    public function index(){
        $data['roles'] = Role::all();
        return view('role.index', $data);
    }

    // Create form showing
    public function create(){
        return view('role.create');
    }

    // Create
    public function store(Request $request){
        Role::create($request->all());
        return redirect()->route('roles');
    }

    // Update form showing
    public function edit($id){
        $data['role'] = Role::find($id);
        return view('role.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $role = Role::find($id);
        $role->update($request->all());
        return redirect()->route('roles');
    }

    // Delete
    public function delete($id){
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles');
    }
}
