<?php

namespace App\Http\Controllers\Admin\Suppliers;

use App\Http\Controllers\Controller;
use App\Models\Supplier;

class DeleteController extends Controller
{
    public function index(Supplier $supplier){
        
       $supplier->delete();
        return redirect()->route('admin.supplier.index');
    }
}
