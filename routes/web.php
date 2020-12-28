<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnotherController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\gpController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\productController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\websiteController;
use App\paymentGateway\payment;

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
Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::get('/addpost', [ClientController::class, 'addPost'])->name('posts.addPost');

Route::get('/updatepost/{id}', [ClientController::class, 'updatePost'])->name('posts.updatePost');

Route::get('/deletepost/{id}', [ClientController::class, 'deletePost'])->name('posts.deletePost');

Route::get('/fluent-strings', [FluentController::class, 'index'])->name("fluent-strings.index");

Route::get('/create', [AnotherController::class, 'create'])->name('create.create');

Route::get('/login', [LoginController::class, 'index'])->name('login.index')->middleware('checkusers');

Route::post('/login', [LoginController::class, 'loginSubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class, 'getSessionData'])->name('Session.get');

Route::get('/session/set', [SessionController::class, 'storeSessionData'])->name('Session.set');

Route::get('/session/remove', [SessionController::class, 'removeSessionData'])->name('Session.remove');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('posts.getAllPost');

Route::get('/add-post', [PostController::class, 'addPost'])->name('post.add');

Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('post.submit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('post.id');

Route::get('/delete_post/{id}', [PostController::class, 'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}', [PostController::class, 'editPost'])->name('post.edit');

Route::post('/update-post', [PostController::class, 'updatePost'])->name('post.update');

Route::get('/inner-join', [PostController::class, 'innerJoinClause'])->name('posts.innerJoin');

Route::get('/left-join', [PostController::class, 'leftJoinClause'])->name('posts.leftJoin');

Route::get('/right-join', [PostController::class, 'rightJoinClause'])->name('posts.rightJoin');

Route::get('/all-posts', [PostController::class, 'getAllPostUsingModel'])->name('posts.all');

//blade master template website route
Route::get('/index', [websiteController::class, 'index']);
Route::get('/about', [websiteController::class, 'about']);
Route::get('/contact', [websiteController::class, 'contact']);

//users database route
Route::get('/users', [PaginationController::class, 'allUsers']);


//Routes for gp database and views

Route::get('gp', [gpController::class, 'getAllGrade'])->name('gp.view');

Route::get('/add-grade', [gpController::class, 'addGrade'])->name('gp.add-grade');

Route::post('/add-grade', [gpController::class, 'addGradeSubmit'])->name('grade.submit');

//Upload route
Route::get('/upload', [uploadController::class, 'uploadForm']);
Route::post('/uploadfile', [uploadController::class, 'uploadFile'])->name('upload.uploadfile');

//facdes
Route::get('/payment', function () {
    return payment::process();
});

//Sending mails
Route::get('/send-mail', [mailController::class, 'sendMails']);

//Eloquent
Route::get('/student', [StudentController::class, 'fetchStudent']);
Route::get('/add-user', [UsersController::class, 'insertRecord']);
Route::get('/fetch/{id}', [UsersController::class, 'fetchPhoneUserById']);