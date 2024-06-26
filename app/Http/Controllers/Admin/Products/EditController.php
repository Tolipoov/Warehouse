<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class EditController extends Controller
{
    public function index(Product $product){
        return view('admin.product.edit', ['product' => $product]);
    }
}
