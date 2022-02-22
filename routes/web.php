<?php
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
    return view('welcome');
});
Route::get('/wating', [App\Http\Controllers\HomeController::class, 'wating'])->middleware('wating')->name('wating');

Auth::routes();
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verify')->name('home');

Route::get('/actions', [App\Http\Controllers\HomeController::class, 'actions'])->middleware('verify')->name('actions');
Route::get('/players', [App\Http\Controllers\HomeController::class, 'players'])->middleware('verify')->name('players');

Route::get('/users', [App\Http\Controllers\HomeController::class, 'actions_users'])->middleware('verify')->name('actions_users');
Route::get('/user/{id}', [App\Http\Controllers\HomeController::class, 'player'])->name('player'); 

Route::post('/update/{id}', [App\Http\Controllers\HomeController::class, 'update_user'])->middleware('verify')->name('update');
Route::get('/update/{id}', [App\Http\Controllers\HomeController::class, 'update_user'])->middleware('verify')->name('update');

Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->middleware('verify')->name('delete');

Route::get('/players/nickname', [App\Http\Controllers\HomeController::class, 'nickname'])->middleware('verify')->name('nickname');
//punsih 
Route::get('/punish', [App\Http\Controllers\HomeController::class, 'punish'])->middleware('verify')->name('punish');
Route::get('/punish/bans', [App\Http\Controllers\HomeController::class, 'punish_bans'])->middleware('verify')->name('punish_bans');
Route::get('/punish/kick', [App\Http\Controllers\HomeController::class, 'punish_kick'])->middleware('verify')->name('punish_kick');
Route::get('/punish/mute', [App\Http\Controllers\HomeController::class, 'punish_mute'])->middleware('verify')->name('punish_mute');
Route::get('/punish/jail', [App\Http\Controllers\HomeController::class, 'punish_jail'])->middleware('verify')->name('punish_jail');

Route::get('/actions/pm', [App\Http\Controllers\HomeController::class, 'actions_pm'])->middleware('verify')->name('actions_pm');
Route::get('/actions/login', [App\Http\Controllers\HomeController::class, 'actions_login'])->middleware('verify')->name('actions_login');

Route::get('/monitoring', [App\Http\Controllers\HomeController::class, 'monitoring'])->middleware('verify')->name('monitoring');

// Admin Center

Route::get('/admin', [App\Http\Controllers\Admin\AdminCenter::class, 'index'])->name('index');
Route::get('/accounts', [App\Http\Controllers\Admin\AdminCenter::class, 'accounts'])->name('accounts'); 

