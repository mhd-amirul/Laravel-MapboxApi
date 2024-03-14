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

Route::middleware(['guest'])->group(function () : void {
    Route::controller(SignController::class)->group(function () : void {
        Route::get('/register',[SignController::class, 'Register']);
        Route::post('/register',[SignController::class, 'store']);
        Route::get('/login',[SignController::class, 'Signin'])->name('login');
        Route::post('/login',[SignController::class, 'authenticate']);
    });
});

Route::middleware(['auth'])->group(function () : void {
    Route::post('/logout',[SignController::class, 'logout']);
    Route::get('/', MapLocation::class);
});
