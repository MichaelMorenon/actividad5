<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        //select * from products
        //$products = Product::all();
        $products = Product::paginate(10);
        //return $products;
        return view('product.index', compact('products'));
    }
}
