<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\adminauthController;
use App\Http\Controllers\jenisMakananController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MejaaController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\stokController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// route::middleware(['auth:admin'])->group(function(){
//     route::apiResource('/category',CategoryController::class);
// });

Route::apiResource('/user', usercontroller::class);
Route::post('/login', [adminauthcontroller::class, 'login']);
route::apiResource('/category', CategoryController::class);
route::apiResource('/jenisMakanan', jenisMakananController::class);
route::apiResource('/menu', MenuController::class);
route::apiResource('/meja', MejaaController::class);
route::apiResource('/pelanggan', pelangganController::class);
route::apiResource('/pemesanan', PemesananController::class);
route::apiResource('/stok', stokController::class);
