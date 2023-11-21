<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;

Route :: apiResource('/category', CategoryController::class);

// Route::get('/', function () {
//     return view('welcome');
// });