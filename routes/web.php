<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class,'index']);
Route::get('/keranjang', [PagesController::class, 'keranjang']);
Route::get('/riwayat', [PagesController::class,'riwayat']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/login', [PagesController::class,'login']);

