<?php

use App\Http\Controllers\Admin\Customers\CreateController;
use App\Http\Controllers\Admin\Customers\DeleteController;
use App\Http\Controllers\Admin\Customers\EditController;
use App\Http\Controllers\Admin\Customers\IndexController as CustomersIndexController;
use App\Http\Controllers\Admin\Customers\ShowController;
use App\Http\Controllers\Admin\Customers\StoreController;
use App\Http\Controllers\Admin\Customers\UpdateController;
use App\Http\Controllers\Admin\Main\IndexController as MainIndexController;
use App\Http\Controllers\Admin\Products\CreateController as ProductsCreateController;
use App\Http\Controllers\Admin\Products\DeleteController as ProductsDeleteController;
use App\Http\Controllers\Admin\Products\EditController as ProductsEditController;
use App\Http\Controllers\Admin\Products\IndexController as ProductsIndexController;
use App\Http\Controllers\Admin\Products\ShowController as ProductsShowController;
use App\Http\Controllers\Admin\Products\StoreController as ProductsStoreController;
use App\Http\Controllers\Admin\Products\UpdateController as ProductsUpdateController;
use App\Http\Controllers\Admin\Purchase\CreateController as PurchaseCreateController;
use App\Http\Controllers\Admin\Purchase\IndexController as PurchaseIndexController;
use App\Http\Controllers\Admin\Purchase\ShowController as PurchaseShowController;
use App\Http\Controllers\Admin\Purchase\StoreController as PurchaseStoreController;
use App\Http\Controllers\Admin\Sales\CreateController as SalesCreateController;
use App\Http\Controllers\Admin\Sales\IndexController as SalesIndexController;
use App\Http\Controllers\Admin\Sales\ShowController as SalesShowController;
use App\Http\Controllers\Admin\Sales\StoreController as SalesStoreController;
use App\Http\Controllers\Admin\Stat\PdfController;
use App\Http\Controllers\Admin\Stat\StatsController as StatStatsController;
use App\Http\Controllers\Admin\Suppliers\CreateController as SuppliersCreateController;
use App\Http\Controllers\Admin\Suppliers\DeleteController as SuppliersDeleteController;
use App\Http\Controllers\Admin\Suppliers\EditController as SuppliersEditController;
use App\Http\Controllers\Admin\Suppliers\IndexController as SuppliersIndexController;
use App\Http\Controllers\Admin\Suppliers\ShowController as SuppliersShowController;
use App\Http\Controllers\Admin\Suppliers\StoreController as SuppliersStoreController;
use App\Http\Controllers\Admin\Suppliers\UpdateController as SuppliersUpdateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Stat\StatsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index']);


Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', [MainIndexController::class, 'index'])->name('admin.index');

    // Products created
    Route::group(['namespace' => 'Products', 'prefix' => 'products'], function () {
        Route::get('/', [ProductsIndexController::class, 'index'])->name('admin.product.index');
        Route::get('/create', [ProductsCreateController::class, 'index'])->name('admin.product.create');
        Route::post('/', [ProductsStoreController::class, 'index'])->name('admin.product.store');
        Route::get('/{product}', [ProductsShowController::class, 'index'])->name('admin.product.show');
        Route::get('/{product}/edit', [ProductsEditController::class, 'index'])->name('admin.product.edit');
        Route::patch('/{product}', [ProductsUpdateController::class, 'index'])->name('admin.product.update');
        Route::delete('/{product}', [ProductsDeleteController::class, 'index'])->name('admin.product.delete');
    });


    // Customers created
    Route::group(['namespace' => 'Customers', 'prefix' => 'customers'], function () {
        Route::get('/', [CustomersIndexController::class, 'index'])->name('admin.customer.index');
        Route::get('/create', [CreateController::class, 'index'])->name('admin.customer.create');
        Route::post('/', [StoreController::class, 'index'])->name('admin.customer.store');
        Route::get('/{customer}', [ShowController::class, 'index'])->name('admin.customer.show');
        Route::get('/{customer}/edit', [EditController::class, 'index'])->name('admin.customer.edit');
        Route::patch('/{customer}', [UpdateController::class, 'index'])->name('admin.customer.update');
        Route::delete('/{customer}', [DeleteController::class, 'index'])->name('admin.customer.delete');
    });

    // Supplier created 
    Route::group(['namespace' => 'Suppliers', 'prefix' => 'suppliers'], function () {
        Route::get('/', [SuppliersIndexController::class, 'index'])->name('admin.supplier.index');
        Route::get('/create', [SuppliersCreateController::class, 'index'])->name('admin.supplier.create');
        Route::post('/', [SuppliersStoreController::class, 'index'])->name('admin.supplier.store');
        Route::get('/{supplier}', [SuppliersShowController::class, 'index'])->name('admin.supplier.show');
        Route::get('/{supplier}/edit', [SuppliersEditController::class, 'index'])->name('admin.supplier.edit');
        Route::patch('/{supplier}', [SuppliersUpdateController::class, 'index'])->name('admin.supplier.update');
        Route::delete('/{supplier}', [SuppliersDeleteController::class, 'index'])->name('admin.supplier.delete');
    });

    
    // Purchase created 
    Route::group(['namespace' => 'Purchase', 'prefix' => 'purchases'], function () {
        Route::get('/', [PurchaseIndexController::class, 'index'])->name('admin.purchase.index');
        Route::get('/create', [PurchaseCreateController::class, 'index'])->name('admin.purchase.create');
        Route::post('/', [PurchaseStoreController::class, 'index'])->name('admin.purchase.store');
        Route::get('/{purchase}', [PurchaseShowController::class, 'index'])->name('admin.purchase.show');
    });

    // Sales created 
    Route::group(['namespace' => 'Sales', 'prefix' => 'saleses'], function () {
        Route::get('/', [SalesIndexController::class, 'index'])->name('admin.sales.index');
        Route::get('/create', [SalesCreateController::class, 'index'])->name('admin.sales.create');
        Route::post('/', [SalesStoreController::class, 'index'])->name('admin.sales.store');
        Route::get('/{sales}', [SalesShowController::class, 'index'])->name('admin.sales.show');
    });

     // Sales created 
     Route::group(['namespace' => 'Stat', 'prefix' => 'stats'], function () {
        Route::get('/', [StatStatsController::class, 'index'])->name('admin.stats.index');
    });
    

});