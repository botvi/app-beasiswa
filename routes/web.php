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
Route::get('/about', [\App\Http\Controllers\WebsiteController::class, 'about']);
Route::get('/infobeasiswa', [\App\Http\Controllers\WebsiteController::class, 'infobeasiswa']);
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
    Route::get('/profil', [\App\Http\Controllers\HomeController::class, 'profil']);

});


route::group(['prefix' => 'mhs'], function () {
    Route::get('/', [\App\Http\Controllers\MahasiswaController::class, 'show'])->name('show_mhs');
    Route::get('/create', [\App\Http\Controllers\MahasiswaController::class, 'create'])->name('mhs.create');
    Route::get('/edit', [\App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mhs.edit');
    Route::post('/store', [\App\Http\Controllers\MahasiswaController::class, 'store'])->name('mhs.store');
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

route::group(['prefix' => 'pengajuan'], function () {
    Route::get('/', [\App\Http\Controllers\PendaftaranBeasiswaController::class, 'index'])->name('beasiswa.index');
    Route::get('/form-pengajuan', [\App\Http\Controllers\PendaftaranBeasiswaController::class, 'formPengajuan'])->name('pendaftaran_beasiswa.form-pengajuan');
    Route::post('/pengajuan-store', [\App\Http\Controllers\PendaftaranBeasiswaController::class, 'store'])->name('pendaftaran_beasiswa.store');

    Route::post('/update/{id}/acc', [\App\Http\Controllers\PendaftaranBeasiswaController::class, 'updateAcc'])->name('pendaftaran_beasiswa.acc');
    Route::post('/update/{id}/rej', [\App\Http\Controllers\PendaftaranBeasiswaController::class, 'updateRej'])->name('pendaftaran_beasiswa.rej');
});
Route::get('/mhs-form', [\App\Http\Controllers\PendaftaranBeasiswaController::class, 'formPengajuanMhs'])->name('pendaftaran_beasiswa.form-pengajuan-mhs');
Route::get('/accept', [\App\Http\Controllers\PendaftaranBeasiswaController::class, 'getAccept'])->name('pendaftaran_beasiswa.acc');
Route::get('/reject', [\App\Http\Controllers\PendaftaranBeasiswaController::class, 'getReject'])->name('pendaftaran_beasiswa.rej');





route::group(['prefix' => 'beasiswa'], function () {
    Route::get('/show-beasiswa', [\App\Http\Controllers\BeasiswaController::class, 'show'])->name('beasiswa.show');
    Route::get('/{id}/id', [\App\Http\Controllers\BeasiswaController::class, 'getId'])->name('beasiswa.getId');
    Route::get('/create', [\App\Http\Controllers\BeasiswaController::class, 'create'])->name('beasiswa.create');
    Route::post('/store', [\App\Http\Controllers\BeasiswaController::class, 'store'])->name('beasiswa.store');
});
