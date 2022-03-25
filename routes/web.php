<?php

use App\Http\Controllers\Logs\LogsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/* Logs */
Route::middleware([])->prefix('logs')->group(function (){
    Route::get('/bans', [LogsController::class, 'bans'])->name('bans');
    Route::get('/kicks', [LogsController::class, 'kicks'])->name('kicks');
    Route::get('/mutes', [LogsController::class, 'mutes'])->name('mutes');
    Route::get('/jails', [LogsController::class, 'jails'])->name('jails');
    Route::get('/warns', [LogsController::class, 'warns'])->name('warns');
    Route::get('/reports', [LogsController::class, 'reports'])->name('reports');

    Route::get('/house', [LogsController::class, 'house'])->name('house');
    Route::get('/businesses', [LogsController::class, 'businesses'])->name('businesses');
    Route::get('/cars', [LogsController::class, 'cars'])->name('cars');

    Route::get('/nickname', [LogsController::class, 'nickname'])->name('nickname');
});
/* Admin */
Route::middleware([])->prefix('admin')->group(function (){

});
