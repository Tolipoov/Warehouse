<?php

namespace App\Http\Controllers\Admin\Suppliers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;

class IndexController extends Controller
{
    public function index(){
        $suppliers = Supplier::all();
        return view('admin.supplier.index', ['suppliers' => $suppliers]);
    }
}
