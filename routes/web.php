<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', [App\Http\Controllers\BerandaController::class,'index']);

