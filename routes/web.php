<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::prefix('user')->group(function () {
    Route::get('/signup', [UserController::class, 'getSignup'])->middleware('guest');
    Route::post('/signup', [UserController::class, 'postSignup'])->middleware('guest');
    Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth')->name('profile');
    Route::get('/signin', [UserController::class, 'getSignin'])->middleware('guest')->name('signin');
    Route::post('/signin', [UserController::class, 'postSignin'])->middleware('guest');
    Route::get('/logout', [UserController::class, 'getLogout'])->middleware('auth')->name('logout');
});
