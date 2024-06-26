<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\Sales;

class ShowController extends Controller
{
    public function index(Sales $sales){
        return view('admin.sales.show', ['sales' => $sales]);
    }
}
