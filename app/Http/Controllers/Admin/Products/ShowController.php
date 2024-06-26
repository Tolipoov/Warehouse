<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ShowController extends Controller
{
    public function index(Product $product){
        return view('admin.product.show', ['product' => $product]);
    }
}
