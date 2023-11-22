<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageCurdController;
use App\Http\Controllers\StudentManagementController;

Route::get('/', [StudentManagementController::class, 'index'])->name('home.page');

Route::get('/registration', [StudentManagementController::class, 'registration'])->name('registration.page');

Route::post('/create', [StudentManagementController::class, 'create'])->name('create.student');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');

Route::get('/edit/{id}', [StudentManagementController::class, 'edit'])->name('edit');


Route::post('/update/{id}', [StudentManagementController::class, 'update'])->name('update');

Route::get('/delete/{id}', [StudentManagementController::class, 'delete'])->name('delete');



Route::get('/image', [ImageCurdController::class, 'index'])->name('image.home.page');
Route::post('/store', [ImageCurdController::class, 'store'])->name('image.store');
Route::get('/imageedit/{id}', [ImageCurdController::class, 'edit'])->name('image.edit');

Route::post('/image/update/{id}', [ImageCurdController::class, 'update'])->name('image.update');
Route::get('/image/delete/{id}', [ImageCurdController::class, 'delete'])->name('image.delete');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// admin LTE 
Route::get('/lte', [StudentManagementController::class, 'lte'])->name('lte');

Route::get('/brand-page', [AdminController::class, 'getAllbrand'])->name('brand');
Route::get('/brand/store', [AdminController::class, 'storeBrand'])->name('brand.store');
Route::post('/brand-create', [AdminController::class, 'createBrand'])->name('create.brand');
