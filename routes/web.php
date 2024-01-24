<?php

use App\Http\Controllers\AnakController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\PendaftaranController as ControllersPendaftaranController;
use App\Models\Anak;
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
Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });



    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/register', function () {
        return view('auth.register');
    });
    // Route::get('/daftar/ppdb', function () {
    //     return view('pendaftaran.pendaftaran');
    // });

    // Route::get('/pendaftaran',[AnakController::class,'index'])->name('pendaftaran');

    // Route::get('/pendaftaran', [PendaftaranController::class, 'showForm'])->name('form');
    // Route::post('/submit-form', [PendaftaranController::class, 'submitForm'])->name('submit.form');

    // Route::get('/beranda', [AnakController::class, 'home'])->name('beranda');
    Route::get('/dashboard', [AnakController::class, 'dashboard']);

    Route::get('/user', [AnakController::class, 'index']);
    Route::get('/create', [AnakController::class, 'create'])->name('user.create');
    Route::post('/store', [AnakController::class, 'store'])->name('user.store');

});