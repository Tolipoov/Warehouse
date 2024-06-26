<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class ShowController extends Controller
{
    public function index(Customer $customer){
        return view('admin.customer.show', ['customer' => $customer]);
    }
}
