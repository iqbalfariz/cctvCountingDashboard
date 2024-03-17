<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CctvController;
use App\Http\Controllers\CountingController;

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
    return view('pages.auth.login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard.general-dashboard');
    })->name('home');
    Route::resource('user', UserController::class);
    // Dashboard
    // Route::get('/dashboard', function () {
    //     return view('pages.dashboard.general-dashboard');
    // });
    Route::resource('cctv', CctvController::class);
    Route::resource('counting', CountingController::class);
});
