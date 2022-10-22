<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ItemController;

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

Route::group(['middleware' => 'auth'], function (){

    Route::get('/', [HomeController::class, 'show'])->name('home');

    Route::get('logout', [HomeController::class, 'logout'])->name('logout');
    
    Route::get('profile', [ProfileController::class, 'showForm'])->name('profile');
    Route::post('profile', [ProfileController::class, 'updateProfile'])->name('profile.post');
    
    Route::get('add', [ItemController::class, 'showForm'])->name('add');
    Route::post('add', [ItemController::class, 'addItem'])->name('add.post');

    Route::get('remove/{item}', [ItemController::class, 'remove'])->name('remove');

});

Route::group(['middleware' => 'guest'], function (){

    Route::get('login', [LoginController::class, 'showForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');

    Route::get('register', [RegisterController::class, 'showForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register'])->name('register.post');

});