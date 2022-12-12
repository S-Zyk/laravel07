<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;use Illuminate\Support\Facades\Storage;


class FormController extends Controller
{
    public function create(){
        return view('form');
    }
}
