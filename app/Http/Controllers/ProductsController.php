<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $products = Product::latest()->paginate(10);

        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create');
    }

    public function store(Product $product, ProductsController $request){

        $product->create(array_merge($request->validated(), [
            'name' => 'required'
        ]));

        return redirect()->route('products.index')
            ->withSuccess(__('Product created successfully.'));
    }
    public function edit(Product $product){
        return view('products.edit', compact('product'));
    }
    public function update(Product $product, ProductsController $request){

        $product->update($request->validated());

        return redirect()->route('products.index')
            ->withSuccess(__('Product updated successfully.'));

    }
    public function destroy(Product $product){

        $product->delete();

        return redirect()->route('products.index')
            ->withSuccess(__('Product deleted successfully.'));

    }
}
