<?php

use App\Http\Controllers\SignController;
use App\Http\Livewire\MapLocation;
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

// Proses Login Registrasi
Route::get('/register',[SignController::class, 'Register'])->middleware('guest');
Route::post('/register',[SignController::class, 'store']);

// Proses Login 
Route::get('/login',[SignController::class, 'Signin'])->name('login')->middleware('guest');
Route::post('/login',[SignController::class, 'authenticate']);

// Proses Logout
Route::post('/logout',[SignController::class, 'logout']);

// akses halaman home
Route::get('/', MapLocation::class);