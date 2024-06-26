<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class EditController extends Controller
{
    public function index(Customer $customer){
        return view('admin.customer.edit', ['customer' => $customer]);
    }
}
