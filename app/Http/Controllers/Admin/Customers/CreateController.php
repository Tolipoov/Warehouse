<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function index(){
        return view('admin.customer.create');
        
    }
}
