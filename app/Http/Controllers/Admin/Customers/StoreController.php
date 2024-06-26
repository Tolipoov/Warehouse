<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customers\StoreRequest;
use App\Models\Customer;

class StoreController extends Controller
{
    public function index(StoreRequest $request){
        
       $data = $request->validated();
       Customer::firstOrCreate($data);

       return redirect()->route('admin.customer.index');
    
    }
}
