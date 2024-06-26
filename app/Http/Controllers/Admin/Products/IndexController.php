<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.product.index', ['products' => $products]);
    }
}
