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
// Route::get('/about', [\App\Http\Controllers\WebsiteController::class, 'about']);
// Route::get('/kontak', [\App\Http\Controllers\WebsiteController::class, 'kontak']);
// Route::get('/visimisi', [\App\Http\Controllers\WebsiteController::class, 'visimisi']);
// Route::group([
//     'prefix' => "berita"
// ], function ($router) {
//     Route::get('/', [\App\Http\Controllers\BeritawebController::class, 'show']);
//     Route::get('/get-all', [\App\Http\Controllers\BeritawebController::class, 'getAll']);
//     Route::get('/beritaview/{id}', [\App\Http\Controllers\BeritawebController::class, 'getId']);
// });



Route::get('/login', [\App\Http\Controllers\LoginController::class, 'halamanlogin'])->name('login');
Route::get('/login/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::post('/postlogin', [\App\Http\Controllers\LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


route::group(['prefix' => 'mhs'], function () {
    Route::get('/', [\App\Http\Controllers\MahasiswaController::class, 'show'])->name('mhs.show');
    Route::get('/create', [\App\Http\Controllers\MahasiswaController::class, 'create'])->name('mhs.create');
    Route::get('/edit', [\App\Http\Controllers\MahasiswaController::class, 'edit'])->name('mhs.edit');
    Route::post('/store', [\App\Http\Controllers\MahasiswaController::class, 'store'])->name('mhs.store');
});
