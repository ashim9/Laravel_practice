<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    // Read
    public function index(){
        $data['plans'] = Plan::all();
        return view('plan.index', $data);
    }

    // Create form showing
    public function create(){
        return view('plan.create');
    }

    // Create
    public function store(Request $request){
        Plan::create($request->all());
        return redirect()->route('plans');
    }

    // Update form showing
    public function edit($id){
        $data['plan'] = Plan::find($id);
        return view('plan.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $plan = Plan::find($id);
        $plan->update($request->all());
        return redirect()->route('plans');
    }

    // Delete
    public function delete($id){
        $plan = Plan::find($id);
        $plan->delete();
        return redirect()->route('plans');
    }
}
