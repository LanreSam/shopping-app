<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [productController::class, 'index'])->name('fruits.index');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/aboutus', [AboutController::class, 'about'])->name('aboutus.about');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
