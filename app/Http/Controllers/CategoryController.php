<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Read
    public function index(){
        $data['categories'] = Category::all();
        return view('category.index', $data);
    }

    // Create form showing
    public function create(){
        return view('category.create');
    }

    // Create
    public function store(Request $request){
        Category::create($request->all());
        return redirect()->route('categories');
    }
}
