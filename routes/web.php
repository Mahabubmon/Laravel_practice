<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\StudenController;
use App\Http\Controllers\Admin\TeacherController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [HomeController::class, 'login'])->name('login');
// Route::get('/register', [HomeController::class, 'register'])->name('register');

//class Route
Route::get('class', [ClassController::class, 'index'])->name('class');
Route::get('class/create', [ClassController::class, 'create'])->name('create.class');
Route::put('class/store', [ClassController::class, 'store'])->name('class.store');
Route::get('class/delete/{id}', [ClassController::class, 'delete'])->name('class.delete');
Route::get('class/edit/{id}', [ClassController::class, 'edit'])->name('class.edit');
Route::put('class/update/{id}', [ClassController::class, 'update'])->name('class.update');

//Student route
Route::resource('students', StudenController::class);

//__Teacher Route
Route::get('teachers', [TeacherController::class, 'index'])->name('teachers');
Route::get('teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::get('teachers/store', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('teachers/delete/{id}', [TeacherController::class, 'destroy'])->name('teachers.delete');
Route::get('teachers/edit/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::put('teachers/update/{id}', [TeacherController::class, 'update'])->name('teachers.update');







