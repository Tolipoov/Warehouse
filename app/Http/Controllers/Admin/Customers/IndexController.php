<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class IndexController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('admin.customer.index', ['customers' => $customers]);
    }
}
