<?php

namespace App\Http\Controllers\Admin\Suppliers;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function index(){
        return view('admin.supplier.create');
        
    }
}
