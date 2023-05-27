<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/', [ShopController::class, 'LaptopType'])->name('laptoptype');

Route::get('/checkout/{id}', [ShopController::class, 'CheckOut'])->name('checkout');
Route::POST('/invoice', [ShopController::class, 'Invoice'])->name('invoice');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


