<?php

namespace App\Http\Controllers\Admin\Stat;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Sales;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatsController extends Controller
{
    public function index()
    {

        $purchases = Purchase::select(
            'purchases.product_id',
            DB::raw('SUM(purchases.count) as total_purchased'),
            'suppliers.name as supplier_name'
        )
        ->join('suppliers', 'purchases.supplier_id', '=', 'suppliers.id')
        ->groupBy('purchases.product_id', 'suppliers.name')
        ->get();

       
        $saleses = Sales::select(
            'saleses.product_id',
            DB::raw('SUM(saleses.count) as total_sold'),
            'customers.name as customer_name'
        )
        ->join('customers', 'saleses.customer_id', '=', 'customers.id')
        ->groupBy('saleses.product_id', 'customers.name')
        ->get();


        return view('admin.stats.index', ['purchases' => $purchases, 'saleses' => $saleses]);
    }

}

