<?php

namespace App\Http\Controllers\Admin\Suppliers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;

class EditController extends Controller
{
    public function index(Supplier $supplier){
        return view('admin.supplier.edit', ['supplier' => $supplier]);
    }
}
