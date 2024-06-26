<?php

namespace App\Http\Controllers\Admin\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Supplier;

class CreateController extends Controller
{
    public function index(){

        $suppliers = Supplier::all();
        $products = Product::all();

        return view('admin.purchase.create', ['suppliers' => $suppliers, 'products' => $products, ]);
        
    }
}
