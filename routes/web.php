<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BagianMagangController;
use App\Http\Controllers\JadwalMagangController;
use App\Http\Controllers\TugasMagangController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(
    function () {  //grouping route hanya boleh diakases ketika login
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('user', UserController::class);
        Route::resource('instansi', InstansiController::class);
        Route::resource('jurusan', JurusanController::class);
        Route::resource('profil', ProfilController::class);
        Route::resource('bagianmagang', BagianMagangController::class);
        Route::resource('jadwalmagang', JadwalMagangController::class);
        Route::resource('tugasmagang', TugasMagangController::class);
    }

);
