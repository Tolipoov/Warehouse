<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\Sales;

class IndexController extends Controller
{
    public function index(){
        $saleses = Sales::query()->with(['product', 'customer'])->get();
        return view('admin.sales.index', ['saleses' => $saleses]);
    }
}
