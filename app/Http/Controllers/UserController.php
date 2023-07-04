<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    // Read
    public function index(){
        $data['users'] = User::all();
        return view('user.index', $data);
    }

    // Create form showing
    public function create(){
        $data['roles'] = Role::pluck('name','id');
        return view('user.create');
    }

    // Create
    public function store(Request $request){
        $User = User::create($request->all());
        $User->roles()->attach($request->role_id);
        return redirect()->route('users');
    }

    // Update form showing
    public function edit($id){
        $data['user'] = User::find($id);
        $data['roles'] = Role::pluck('name','id');
        $data['role_role'] = $data['role']->roles->pluck('id','id')->toArray();
        return view('user.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        $user->roles()->sync($request->role_id);
        return redirect()->route('users');
    }

    // Delete
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }
}
