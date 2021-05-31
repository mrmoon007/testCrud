<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('customer');
// });
Route::get('/', [CustomerController::class,'index'])->name('index.customer');
Route::post('/customer/store', [CustomerController::class,'store'])->name('store.customer');
Route::get('/customer/edit/{id}', [CustomerController::class,'edit'])->name('edit.customer');
Route::get('/customer/create', [CustomerController::class,'create'])->name('create.customer');
Route::get('/customer/delete/{id}', [CustomerController::class,'delete'])->name('delete.customer');
Route::get('/customer/view/{id}', [CustomerController::class,'view'])->name('view.customer');
Route::post('/customer/update/{id}', [CustomerController::class,'update'])->name('update.customer');
Route::get('/customer/search', [CustomerController::class,'search'])->name('search.customer');
