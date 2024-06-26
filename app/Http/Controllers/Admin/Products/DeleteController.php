<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DeleteController extends Controller
{
    public function index(Product $product){
        
       $product->delete();
        return redirect()->route('admin.product.index');
    }
}
