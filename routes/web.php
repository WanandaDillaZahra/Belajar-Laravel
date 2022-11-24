<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

//URL Index / Home
Route::redirect('/', '/home');
Route::get('/home', [HomeC::class, 'index']);
Route::get('/tentangsekolah', [HomeC::class, 'tentangsekolah']);
Route::get('/datapesertadidik', [HomeC::class, 'datapesertadidik']);
Route::get('/dataeskul', [HomeC::class, 'dataeskul']);
Route::get('/dataprestasi', [HomeC::class, 'dataprestasi']);