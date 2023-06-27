<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\Division;
use App\Models\District;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
        //read
        public function index(){
            $data['areas'] = Area::all();
            return view('area.index', $data);
        }
    
        //create form showing area
        public function create(){
            $data['countries'] = Country::pluck('name','id');
            return view('area.create', $data);
        }
    
        //create
        public function store(Request $request){
            Area::create($request->all());
            return redirect()->route('areas');
        }
    
        //update form showing
        public function edit($id){
            $data['area'] = Area::find($id);
            return view('area.edit', $data);
        }
    
        // Update
        public function update(Request $request, $id){
            $area = Area::find($id);
            $area->update($request->all());
            return redirect()->route('areas');
        }
    
        // Delete
        public function delete($id){
            $area = Area::find($id);
            $area -> delete();
            return redirect()->route('areas');
        }
    
        // AJAX function
    
        public function load_divisions(Request $request){
            $data['divisions'] = Division::query()->where('country_id',$request->country_id)->pluck('name','id');
    
            return view('ajax_views.division_options',$data);
        }

        public function load_districts(Request $request){
            $data['districts'] = District::query()->where('division_id',$request->division_id)->pluck('name','id');
    
            return view('ajax_views.district_options',$data);
        }
}
