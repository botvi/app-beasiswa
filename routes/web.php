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

Route::get('/', [\App\Http\Controllers\WebsiteController::class, "index"]);
Route::get('/kontak', [\App\Http\Controllers\WebsiteController::class, 'kontak']);
Route::group([
    'prefix' => "berita"
], function ($router) {
    Route::get('/', [\App\Http\Controllers\BeritawebController::class, 'show']);
    Route::get('/get-all', [\App\Http\Controllers\BeritawebController::class, 'getAll']);
    Route::get('/beritaview/{id}', [\App\Http\Controllers\BeritawebController::class, 'getId']);
});



Route::get('/login', [\App\Http\Controllers\LoginController::class, 'halamanlogin'])->name('login');
Route::post('/registrasi', [\App\Http\Controllers\RegisterController::class, 'register'])->name('daftar');
Route::get('/daftar', [\App\Http\Controllers\RegisterController::class, 'daftar'])->name('daftar');
Route::get('/login/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::post('/postlogin', [\App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::group([
    'middleware' =>  ["auth"],
    'prefix' => "news"
], function ($router) {
    Route::get('/', [\App\Http\Controllers\BeritaController::class, 'index'])->name('berita.index');
    Route::get('/create', [\App\Http\Controllers\BeritaController::class, 'create'])->name('berita.create');
    Route::post('/store', [\App\Http\Controllers\BeritaController::class, 'store'])->name('berita.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\BeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\BeritaController::class, 'update'])->name('berita.update');
    Route::get('/{id}/destroy', [\App\Http\Controllers\BeritaController::class, 'destroy'])->name('berita.destroy');
    Route::get('/detail/{id}', [\App\Http\Controllers\BeritaController::class, 'getId']);
});
