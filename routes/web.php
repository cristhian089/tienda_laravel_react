<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('producto');
    // return view('welcome');
});

Route::get('/producto',[ProductoController::class,'index']);
Route::post('/producto',[ProductoController::class,'store']);