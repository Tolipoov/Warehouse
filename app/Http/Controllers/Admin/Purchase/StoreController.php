<?php

namespace App\Http\Controllers\Admin\Purchase;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\StoreRequest;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request){

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'count' => 'required|integer|min:1',
        ]);

        $purchase = Purchase::create([
            'product_id' => $request->product_id,
            'supplier_id' => $request->supplier_id,
            'count' => $request->count,
        ]);
        
        $product = Product::find($request->product_id);
        $product->count += $request->count;
        $product->save();

        return redirect()->route('admin.purchase.index');
  
    }
}
