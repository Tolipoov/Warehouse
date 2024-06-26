<?php

namespace App\Http\Controllers\Admin\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Purchase;

class IndexController extends Controller
{
    public function index(){
        $purchases = Purchase::query()->with(['product', 'supplier'])->get();
        return view('admin.purchase.index', ['purchases' => $purchases]);
    }
}
