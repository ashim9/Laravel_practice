<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Division;
use App\Models\District;

class DistrictController extends Controller
{
    //read
    public function index(){
        $data['districts'] = District::all();
        return view('district.index', $data);
    }

    //create form showing district
    public function create(){
        $data['countries'] = Country::pluck('name','id');
        return view('district.create', $data);
    }

    //create 
    public function store(Request $request){
        District::create($request->all());
        return redirect()->route('districts');
    }

    //update form showing
    public function edit($id){
        $data['district'] = District::find($id);
        return view('district.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $district = District::find($id);
        $district->update($request->all());
        return redirect()->route('districts');
    }

    // Delete
    public function delete($id){
        $district = District::find($id);
        $district -> delete();
        return redirect()->route('districts');
    }

    // AJAX function
    public function load_divisions(Request $request){
        $data['divisions'] = Division::query()->where('country_id',$request->country_id)->pluck('name','id');
        return view('ajax_views.division_options',$data);
    }

}
