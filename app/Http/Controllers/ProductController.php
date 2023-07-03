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

    // Update form showing
    public function edit($id){
        $data['product'] = Product::find($id);
        $data['categories'] = Category::pluck('name','id');
        $data['product_categories'] = $data['product']->categories->pluck('id','id')->toArray();
        return view('product.edit', $data);
    }

    // Update
    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->update($request->all());
        $product->categories()->sync($request->category_id);
        return redirect()->route('products');
    }

    // Delete
    public function delete($id){
        $product = Product::find($id);
        $product->categories()->detach();
        $product->delete();
        return redirect()->route('products');
    }
}
