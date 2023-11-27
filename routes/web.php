<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
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

Route::prefix('brand')->group(function () {
    Route::get('/index', [BrandController::class, 'index'])->name('brand.index');
    Route::get('/create', [BrandController::class, 'create'])->name('brand.create');
    Route::post('/store', [BrandController::class, 'store'])->name('brand.store');
    Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::get('/delete/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
});
Route::prefix('category')->group(function () {
    Route::get('/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});
