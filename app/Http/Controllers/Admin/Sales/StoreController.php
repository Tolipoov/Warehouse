<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sales;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(Request $request){

        $request->validate([
            'product_id' => 'required|exists:products,id',
            'customer_id' => 'required|exists:customers,id',
            'count' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);
        
        if ($request->count > $product->count) {
            return redirect()->back()->with('error', 'Невозможно выполнить заказ: запрошенное количество больше, чем доступно на складе.');
        }else{
            $sales = Sales::create([
                'product_id' => $request->product_id,
                'customer_id' => $request->customer_id,
                'count' => $request->count,
            ]);
    
            
            $product = Product::find($request->product_id);
            $product->count -= $request->count;
            $product->save();
    
            return redirect()->route('admin.sales.index');
        }

       
  
    }
}
