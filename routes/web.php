<?php

use App\Http\Controllers\SignController;
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
    Route::controller(SignController::class)->prefix('auth')->group(function () : void {
        Route::get( '/signup','Register')->name('signup.view');
        Route::post('/signup','store')->name('signup.store');

        Route::get( '/signin', 'Signin')->name('signin.view');
        Route::post('/signin', 'authenticate')->name('signin.store');
    });
});

Route::middleware(['auth'])->group(function () : void {
    Route::post('/signout',[SignController::class, 'signOut'])->name('signout.store');
    Route::get('/', fn () =>  view('Home') )->name('index');
});

Route::fallback(fn () => view('welcome'));
