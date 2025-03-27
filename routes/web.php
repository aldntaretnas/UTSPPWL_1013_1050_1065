<?php

use App\Http\Controllers\MerekController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProdukController::class, 'index'])->name('index');
Route::get('/products', [ProdukController::class, 'index'])->name('index');
Route::get('products/create', [ProdukController::class,'create'])->name('products.create');
Route::post('/products', [ProdukController::class, 'store'])->name('products.store');
Route::get('products/{id}/edit', [ProdukController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ProdukController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProdukController::class,'destroy'])->name('products.destroy');

Route::get('/brand', [MerekController::class, 'index'])->name('brand');
Route::get('/categories', [KategoriController::class, 'index'])->name('categories');