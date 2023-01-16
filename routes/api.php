<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Http\Controllers\API\sanphamcontroller;
use App\Http\Controllers\API\tintuccontroller;
use App\Http\Controllers\API\loaispController;
use App\Http\Controllers\API\nhanviencontroller;
use App\Http\Controllers\API\nhacungcapcontroller;
use App\Http\Controllers\API\khachhangcontroller;
use App\Http\Controllers\API\hoadonnhapcontroller;
use App\Http\Controllers\API\hoadonbancontroller;
use App\Http\Controllers\API\CThoadonbancontroller;
use App\Http\Controllers\API\CThoadonnhapcontroller;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('sanphams', sanphamcontroller::class);
Route::resource('categories', loaispController::class);
Route::resource('new', tintuccontroller::class);
Route::resource('nhanviens', nhanviencontroller::class);
Route::resource('nhacungcaps', nhacungcapcontroller::class);
Route::resource('khachhangs', khachhangcontroller::class);
Route::resource('hoadonnhaps', hoadonnhapController::class);
Route::resource('hoadonbans', hoadonbanController::class);
Route::resource('CThoadonbans', CThoadonbanController::class);
Route::resource('CThoadonnhaps', CThoadonnhapController::class);
