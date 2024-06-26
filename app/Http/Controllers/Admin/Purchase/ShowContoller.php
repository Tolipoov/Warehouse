<?php

namespace App\Http\Controllers\Admin\Purchase;

use App\Http\Controllers\Controller;
use App\Models\Purchase;

class ShowController extends Controller
{
    public function index(Purchase $purchase){
        return view('admin.purchase.show', ['purchase' => $purchase]);
    }
}
