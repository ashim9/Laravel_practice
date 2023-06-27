<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    // Read
    public function index(){
        $data['products'] = Product::all();
        return view('product.index', $data);
    }

    // Create form showing
    public function create(){
        $data['categories'] = Category::pluck('name','id');
        return view('product.create', $data);
    }

    // Create
    public function store(Request $request){
        
        $product = Product::create($request->all());
        $product->categories()->attach($request->category_id);
        return redirect()->route('products');
    }
}
