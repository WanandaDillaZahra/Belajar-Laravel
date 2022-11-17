<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

//URL Index / Home
Route::redirect('/', '/home');
Route::get('/home', [HomeC::class, 'index']);
Route::get('/about', [HomeC::class, 'about']);
Route::get('/contact', [HomeC::class, 'contact']);