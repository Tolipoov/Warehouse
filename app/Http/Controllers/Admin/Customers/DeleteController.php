<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Controllers\Controller;
use App\Models\Customer;

class DeleteController extends Controller
{
    public function index(Customer $customer){
        
       $customer->delete();
        return redirect()->route('admin.customer.index');
    }
}
