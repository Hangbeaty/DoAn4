<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/sanpham', function(){
    return view('admin/sanpham');
});
Route::get('/admin/category', function(){
    return view('admin/category');
});
Route::get('/index', function(){
    return view('index');
});
Route::get('/admin/new', function(){
    return view('admin/new');
});
Route::get('/admin/nhanvien', function () {
    return view('admin/nhanvien');
});
Route::get('/admin/nhacungcap', function () {
    return view('admin/nhacungcap');
});
Route::get('/admin/khachhang', function () {
    return view('admin/khachhang');
});
Route::get('/admin/hoadonnhap', function () {
    return view('admin/hoadonnhap');
});
Route::get('/admin/hoadonban', function () {
    return view('admin/hoadonban');
});
Route::get('/admin/CThoadonban', function () {
    return view('admin/CThoadonban');
});
Route::get('/admin/CThoadonnhap', function () {
    return view('admin/CThoadonnhap');
});

Route::get('/user/loaisp', function () {
    return view('user/loaisp');
});

Route::get('/loaisp/{id}', function ($id) {
    return view('loaisp',['id'=>$id]);
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/detail/{id}', function ($id) {
    return view('detail',['id'=>$id]);
});
