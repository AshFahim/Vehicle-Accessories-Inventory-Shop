<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
use Dotenv\Util\Str;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProductController::class, 'index']);
Route::get('/dashboard', function () {
    return DashboardController::index();
})->middleware(['auth'])->name('dashboard');

Route::get('/usersetting', function () {
    return DashboardController::userSettings();
})->middleware(['auth'])->name('usersetting');

Route::get('/updateShippingAddress', function (Request $request) {
    return DashboardController::updateShippingAddress($request);
})->middleware(['auth']);

Route::get('/updateBillingAddress', function (Request $request) {
    return DashboardController::updateBillingAddress($request);
})->middleware(['auth']);

Route::get('/wishlist', function () {
    return view('wishlist')->with('pageName', 'Wishlist');
})->middleware(['auth'])->name('wishlist');

Route::get('/orderdetails/{orderNo}', function ($orderNo) {
    return OrderController::orderDetails($orderNo);
})->middleware(['auth'])->name('orderdetails');

Route::get('/cart', function () {
    return view('cart')->with('pageName', 'cart');
})->middleware(['auth'])->name('cart');

Route::get('/admindash', function () {
    return view('admindash')->with('pageName', 'admindash');
})->middleware(['auth'])->name('admindash');


Route::get('/orders', function () {
    return OrderController::index();
})->middleware(['auth'])->name('orders');

Route::get('/shop', function (Request $request) {
    return ProductController::shop($request);
});

Route::get('/shop/filtered', function (Request $request) {
    return ProductController::filteredShop($request);
})->name('filteredShop');

require __DIR__ . '/auth.php';

Route::get('updateModels/{brand}', function ($brand) {
    return ProductController::getModels($brand);
});

Route::get('updateSpecifications/{brand}/{specs}', function ($brand, $specs) {
    return ProductController::getSpecifications($brand, $specs);
});

Route::get('product/{query}', function ($query) {
    return ProductController::product($query);
});

