<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Division;

class DivisionController extends Controller
{
    // Read
    public function index(){
        $data['divisions'] = Division::all();
        return view('division.index', $data);
    }

    // Create form showing
    public function create(){
        $data['countries'] = Country::query()->pluck('name','id');
        return view('division.create', $data);
    }

    // Create
    public function store(Request $request){
        Division::create($request->all());
        return redirect()->route('divisions');
    }

    // Update form showing
    public function edit($id){
        $data['division'] = Division::find($id);
        return view('division.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $division = Division::find($id);
        $division->update($request->all());
        return redirect()->route('divisions');
    }

    // Delete
    public function delete($id){
        $division = Division::find($id);
        $division -> delete();
        return redirect()->route('divisions');
    }
}
