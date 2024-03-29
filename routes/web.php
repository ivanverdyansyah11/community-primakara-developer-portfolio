<?php

use App\Http\Controllers\MainController;
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

Route::fallback(function () {
    return redirect('/mainpage');
});

Route::controller(MainController::class)->group(function () {
    Route::get('/mainpage', 'index')->name('mainpage');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
});