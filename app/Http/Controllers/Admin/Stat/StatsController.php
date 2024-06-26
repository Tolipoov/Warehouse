<?php

namespace App\Http\Controllers\Admin\Stat;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\Stat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatsController extends Controller
{
    public function index()
    {

        $purchases = Purchase::select('product_id', DB::raw('SUM(count) as total_purchased'))
            ->groupBy('product_id')
            ->get();

        $sales = Sale::select('product_id', DB::raw('SUM(count) as total_sold'))
            ->groupBy('product_id')
            ->get();
            


        return view('admin.stats.index', compact('purchases', 'sales'));
    }
}
