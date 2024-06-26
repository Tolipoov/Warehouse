<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function index(){
        return view('admin.product.create');
        
    }
}
