<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnotherController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
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

Route::get('/posts', [ClientController::class, 'getAllPost'])->name('posts.getallpost');

Route::get('/posts/{id}', [ClientController::class, 'getPostById'])->name('posts.getPostById');

Route::get('/addpost', [ClientController::class, 'addPost'])->name('posts.addPost');

Route::get('/updatepost/{id}', [ClientController::class, 'updatePost'])->name('posts.updatePost');

Route::get('/deletepost/{id}', [ClientController::class, 'deletePost'])->name('posts.deletePost');

Route::get('/fluent-strings', [FluentController::class, 'index'])->name("fluent-strings.index");

Route::get('/create', [AnotherController::class, 'create'])->name('create.create');
