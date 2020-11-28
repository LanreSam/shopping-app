<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users/{name?}', function($name = null){
    return "hi ". $name.", how are you?";
});

Route::get('cart/{items?}', function($items = null){
    return $items. " items added to cart";
});

Route::get('profiles/{username?}', function($username = null){
    return $username. ", your items has been added to cart";
});

Route::match(['get', 'post'], '/students', function (Request $req) {
    return 'Requested method is ' . $req->method();
});
