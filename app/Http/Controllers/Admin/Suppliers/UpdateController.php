<?php

namespace App\Http\Controllers\Admin\Suppliers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Suppliers\UpdateRequest;
use App\Models\Supplier;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Supplier $supplier){

        $data = $request->validated();
        $supplier->update($data);

        return redirect()->route('admin.supplier.update', ['supplier' => $supplier]);
    }
}
