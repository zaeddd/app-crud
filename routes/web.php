<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', [ProductController::class, 'index'])->name('product.index'); //view all products
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create'); //form to create a product
Route::post('/product', [ProductController::class, 'store'])->name('product.store'); //store a new product
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update'); //update a product
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit'); //edit a product
Route::delete('/product/{product}/dest', [ProductController::class, 'destroy'])->name('product.destroy'); //delete a product
