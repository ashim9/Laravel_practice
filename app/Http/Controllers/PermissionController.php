<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;

class PermissionController extends Controller
{
    // Read
    public function index(){
        $data['permissions'] = Permission::all();
        return view('permission.index', $data);
    }

    // Create form showing
    public function create(){
        return view('permission.create');
    }

    // Create
    public function store(Request $request){
        Permission::create($request->all());
        return redirect()->route('permissions');
    }

    // Update form showing
    public function edit($id){
        $data['permission'] = Permission::find($id);
        return view('permission.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $permission = Permission::find($id);
        $permission->update($request->all());
        return redirect()->route('permissions');
    }

    // Delete
    public function delete($id){
        $permission = Permission::find($id);
        $permission->delete();
        return redirect()->route('permissions');
    }
}
