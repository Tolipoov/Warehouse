<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\StoreRequest;
use App\Models\Product;

class StoreController extends Controller
{
    public function index(StoreRequest $request){
        
       $data = $request->validated();
       Product::firstOrCreate($data);

       return redirect()->route('admin.product.index');
    
    }
}
