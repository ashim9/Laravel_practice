<?php

namespace App\Http\Controllers;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    // Read
    public function index(){
        $data['countries'] = Country::all();
        return view('country.index', $data);
    }

    // Create form showing
    public function create(){
        return view('country.create');
    }

    // Create
    public function store(Request $request){
        Country::create($request->all());
        return redirect()->route('countries');
    }

    // Update form showing
    public function edit($id){
        $data['country'] = Country::find($id);
        return view('country.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $country = Country::find($id);
        $country->update($request->all());
        return redirect()->route('countries');
    }

    // Delete
    public function delete($id){
        $country = Country::find($id);
        $country -> delete();
        return redirect()->route('countries');
    }
}
