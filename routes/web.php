<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
 
Route::post('/add', [ProductController::class, 'store']);
Route::get('/create', [ProductController::class, 'create']);


// Route::resource('product', ProductController::class)->except([
//     'show'
// ]);

Route::get('/', function () {
    return view('welcome');
});
