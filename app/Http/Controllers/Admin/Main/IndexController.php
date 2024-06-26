<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sales;
use App\Models\Supplier;

class IndexController extends Controller
{
    public function index(){
        $data = [];
        $data['productCount'] = Product::all()->count();
        $data['customerCount'] = Customer::all()->count();
        $data['supplierCount'] = Supplier::all()->count();
        $data['salesCount'] = Sales::all()->count();
        $data['purchaseCount'] = Purchase::all()->count();
        return view('admin.main.index', ['data' => $data]);
    }
}
