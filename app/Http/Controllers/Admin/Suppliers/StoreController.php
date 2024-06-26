<?php

namespace App\Http\Controllers\Admin\Suppliers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Suppliers\StoreRequest;
use App\Models\Supplier;

class StoreController extends Controller
{
    public function index(StoreRequest $request){
        
       $data = $request->validated();
       Supplier::firstOrCreate($data);

       return redirect()->route('admin.supplier.index');
    
    }
}
