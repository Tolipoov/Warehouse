<?php

namespace App\Http\Controllers\Admin\Suppliers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;

class ShowController extends Controller
{
    public function index(Supplier $supplier){
        return view('admin.supplier.show', ['supplier' => $supplier]);
    }
}
