<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index(){

        $products = Product::latest()->paginate(10);

        return view('products.index', compact('products'));
    }
    public function create(){
        return view('products.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(StoreProductRequest $request){
        $data = $request->all();
        if ($request->hasFile('img')){
            $path = Storage::disk('public')->
                putFile('ololo', $request->file('img'));
            $data['img'] = $path;
        }

            Product::create($data);

        return redirect()->route('products.index');
    }

    public function edit(Product $product){
        return view('products.edit', [
            'categories' => Category::all(),
            'product' => $product
        ]);
    }


    public function update(Request $request, Product $product){

        $product->fill($request->all())->save();

        return redirect()->route('products.index');

    }

    public function destroy(Product $product){

        $product->delete();

        return redirect()->route('products.index');

    }
}
