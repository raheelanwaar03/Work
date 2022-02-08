<?php

use App\Http\Controllers\BazarController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BazarController::class,'home'])->name('home');
Route::get('/addProduct', [BazarController::class,'addProduct'])->name('addProduct');
Route::post('/saveProduct', [BazarController::class,'saveProduct'])->name('saveProduct');
Route::get('/showProduct/{id}', [BazarController::class,'showProduct'])->name('showProduct');
Route::get('/editProduct/{id}', [BazarController::class,'editProduct'])->name('editProduct');
Route::post('/updateProduct/{id}', [BazarController::class,'updateProduct'])->name('updateProduct');
Route::get('/destroyProduct/{id}', [BazarController::class,'destroyProduct'])->name('destroyProduct');
