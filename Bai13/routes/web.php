<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('master');
});

Route::get('index',[PageController::class, 'getIndex'])->name('trang-chu');

Route::get('chi-tiet-san-pham/{id}',[PageController::class, 'getDetail'])->name('chitietsanpham');

Route::get('lien-he',[PageController::class, 'getLienHe'])->name('lienhe');

Route::get('gioi-thieu',[PageController::class, 'getAbout'])->name('gioithieu');

Route::get('loai-san-pham/{type}',[PageController::class, 'getLoaiSp'])->name('loaisanpham');

Route::get('add-to-cart/{id}',[PageController::class, 'getAddToCart'])->name('themgiohang');

Route::get('del-cart/{id}',[PageController::class, 'getDelItemCart'])->name('xoagiohang');

Route::get('dat-hang',[PageController::class, 'getCheckOut'])->name('dathang');

Route::post('dat-hang',[PageController::class, 'postCheckOut'])->name('dathang');
