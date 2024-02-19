<?php

use App\Http\Controllers\ProductController;
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

Route::get('/',[ProductController::class,'index']);
Route::post('/save',[ProductController::class,'save']);
Route::get('/edit-product/{product_id}',[ProductController::class,'edit'])->name('editProduct');
Route::put('/update-product',[ProductController::class,'update'])->name('updateProduct');
