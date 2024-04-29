<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('class',[ClassController::class,'index'])->name('class');
Route::get('create/class',[ClassController::class,'create'])->name('create.class');
Route::get('store/class',[ClassController::class,'store'])->name('store.class');