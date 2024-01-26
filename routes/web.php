<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\PendaftaranController as ControllersPendaftaranController;
use App\Models\Anak;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




    // Route::get('/login', function () {
    //     return view('auth.login');
    // });

    // Route::get('/register', function () {
    //     return view('auth.register');
    // });


    // Route::middleware(['guest'])->group(function () {
    //     Route::get('/login', [LoginController::class, 'index'])->name('login');
    //     Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
    // });

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::group(['prefix'=>'admin','middleware'=>['auth'],'as' => 'admin'], function(){
    // bug autentifikasi
    // Route::get('/home', [PendaftaranController::class, 'home'])->name('home');
    // Route::get('/dashboard', [PendaftaranController::class, 'dashboard']);


    // Route::get('/user', [PendaftaranController::class, 'index']);
    // Route::get('/create', [PendaftaranController::class, 'create'])->name('user.create');
    // Route::post('/store', [PendaftaranController::class, 'store'])->name('user.store');
    // Route::get('/user/{id}/edit', [PendaftaranController::class, 'edit'])->name('edit');
    // Route::put('/user/{id}', [PendaftaranController::class, 'update'])->name('update');
    // Route::delete('/user/{id}', [PendaftaranController::class, 'destroy'])->name('destroy');
}) ;
// testi tanpa autentifikasi
Route::get('/home', [PendaftaranController::class, 'home'])->name('home');
Route::get('/dashboard', [PendaftaranController::class, 'dashboard']);


Route::get('/user', [PendaftaranController::class, 'index']);
Route::get('/create', [PendaftaranController::class, 'create'])->name('user.create');
Route::post('/store', [PendaftaranController::class, 'store'])->name('user.store');
Route::get('/user/{id}/edit', [PendaftaranController::class, 'edit'])->name('edit');
Route::put('/user/{id}', [PendaftaranController::class, 'update'])->name('update');
Route::delete('/user/{id}', [PendaftaranController::class, 'destroy'])->name('destroy');

    // Route::middleware(['auth'])->group(function (){
    //     Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    //     Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    //     Route::get('/admin/pengguna', [AdminController::class, 'pengguna'])->middleware('userAkses:user');
    //     Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    // });