<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('class',[ClassController::class,'index'])->name('class');
Route::get('class/create',[ClassController::class,'create'])->name('create.class');
Route::put('class/store',[ClassController::class,'store'])->name('class.store');
Route::get('class/delete/{id}',[ClassController::class,'delete'])->name('class.delete');
Route::get('class/edit/{id}',[ClassController::class,'edit'])->name('class.edit');
Route::get('class/update/{id}',[ClassController::class,'update'])->name('class.update');
