<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;

class CreateController extends Controller
{
    public function index(){

        $customers = Customer::all();
        $products = Product::all();

        return view('admin.sales.create', ['customers' => $customers, 'products' => $products, ]);
        
    }
}
