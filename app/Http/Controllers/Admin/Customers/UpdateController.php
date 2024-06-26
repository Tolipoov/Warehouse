<?php

namespace App\Http\Controllers\Admin\Customers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customers\UpdateRequest;
use App\Models\Customer;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Customer $customer){

        $data = $request->validated();
        $customer->update($data);

        return redirect()->route('admin.customer.update', ['customer' => $customer]);
    }
}
