<?php

use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

Route::post('create', [DepartmentController::class, 'storeDepartment']);
Route::get('show', [DepartmentController::class, 'showData']);
