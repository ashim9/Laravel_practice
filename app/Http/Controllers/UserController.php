<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Read
    public function index(){
        $data['users'] = User::all();
        return view('user.index', $data);
    }

    // Create form showing
    public function create(){
        return view('user.create');
    }

    // Create
    public function store(Request $request){
        User::create($request->all());
        return redirect()->route('users');
    }

    // Update form showing
    public function edit($id){
        $data['user'] = User::find($id);
        return view('user.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('users');
    }

    // Delete
    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }
}
