<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactContoller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact',[ContactContoller::class,'index']);
Route::post('/contact/store',[ContactContoller::class,'store'])->name('contact.store');