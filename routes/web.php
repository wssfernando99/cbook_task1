<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
 
Route::post('/add', [ProductController::class, 'store'])->name('add');
Route::get('/create', [ProductController::class, 'create']);
Route::put('/{id}/update', [ProductController::class, 'update'])->name('update');
Route::get('/{id}/edit', [ProductController::class, 'edit']);


// Route::resource('product', ProductController::class)->except([
//     'show'
// ]);

Route::get('/', function () {
    return view('welcome');
});
