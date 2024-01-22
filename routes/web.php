<?php

use App\Http\Controllers\AnakController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\PendaftaranController as ControllersPendaftaranController;
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

Route::get('/', function () {
    return view('home');
});



Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/table', function () {
    return view('admin.tableDashboard');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/pendaftaran', [PendaftaranController::class, 'showForm'])->name('form');
Route::post('/submit-form', [PendaftaranController::class, 'submitForm'])->name('submit.form');