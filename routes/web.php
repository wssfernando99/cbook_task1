<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::resource('product', ProductController::class)->except([
    'show'
]);

Route::get('/', function () {
    return view('welcome');
});
