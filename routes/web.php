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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/user/tambah', [App\Http\Controllers\UserController::class, 'tambah'])->name('user.tambah');
Route::post('/user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/change', [App\Http\Controllers\UserController::class, 'change'])->name('user.change');
Route::get('/user/hapus/{id}', [App\Http\Controllers\UserController::class, 'hapus'])->name('user.hapus');
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang');
Route::get('/barang/tambah', [App\Http\Controllers\BarangController::class, 'tambah'])->name('barang.tambah');
Route::post('/barang/store', [App\Http\Controllers\BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/edit/{id}', [App\Http\Controllers\BarangController::class, 'edit'])->name('barang.edit');
Route::post('/barang/change', [App\Http\Controllers\BarangController::class, 'change'])->name('barang.change');
Route::get('/barang/hapus/{id}', [App\Http\Controllers\BarangController::class, 'hapus'])->name('barang.hapus');
Route::get('/lelang', [App\Http\Controllers\LelangController::class, 'index'])->name('lelang');
Route::get('/lelang/tambah', [App\Http\Controllers\LelangController::class, 'tambah'])->name('lelang.tambah');
Route::get('/lelang/baru', [App\Http\Controllers\LelangController::class, 'baru'])->name('lelang.baru');
Route::post('/lelang/store', [App\Http\Controllers\LelangController::class, 'store'])->name('lelang.store');
Route::get('/lelang/tutup/{id}', [App\Http\Controllers\LelangController::class, 'tutup'])->name('lelang.tutup');
Route::get('/lelang/cancel/{id}', [App\Http\Controllers\LelangController::class, 'cancel'])->name('lelang.cancel');
Route::get('/lelang/detail/{id}', [App\Http\Controllers\LelangController::class, 'detail'])->name('lelang.detail');
Route::get('/tawar', [App\Http\Controllers\BidController::class, 'index'])->name('tawar');
Route::get('/tawar/tw/{id}', [App\Http\Controllers\BidController::class, 'tw'])->name('tawar.tw');
Route::post('/tawar/store', [App\Http\Controllers\BidController::class, 'store'])->name('tawar.store');
Route::get('/menang', [App\Http\Controllers\MenangController::class, 'index'])->name('menang');
Route::get('/laporan', [App\Http\Controllers\MenangController::class, 'laporan'])->name('laporan');
Route::get('/laporan/print', [App\Http\Controllers\MenangController::class, 'print'])->name('laporan.print');
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
