<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\DashboardRegistrarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PassController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/daftar', [RegistrarController::class, 'index']);
Route::post('/daftar', [RegistrarController::class, 'store']);

Route::get('/daftar/sukses', function () {
    return view('daftar.success', ['title' => 'Berhasil daftar']);
});

Route::get('/pengumuman', [AnnouncementController::class, 'index']);
Route::post('/pengumuman', [AnnouncementController::class, 'check']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardRegistrarController::class, 'dashboard'])->middleware('auth');

Route::resource('/dashboard/registrar', DashboardRegistrarController::class)->middleware('auth')->except(['create', 'store']);

Route::get('/dashboard/passregistrars', [PassController::class, 'index'])->middleware('auth');

