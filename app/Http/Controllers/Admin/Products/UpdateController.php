<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\UpdateRequest;
use App\Models\Product;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Product $product){

        $data = $request->validated();
        $product->update($data);

        return redirect()->route('admin.product.update', ['product' => $product]);
    }
}
