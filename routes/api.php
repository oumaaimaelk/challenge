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
|Route::get('/add-product','ProductController@create');
Route::get('/edit-product/{product}','ProductController@edit');
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products', 'ProductController@index');
Route::post('/add-product','ProductController@store');
Route::get('/show-product/{product}','ProductController@show');
Route::put('/edit-product/{product}','ProductController@update');
Route::delete('/delete-product/{product}','ProductController@destroy');


Route::get('/categories', 'CategoryController@index');
Route::post('/add-category','CategoryController@store');
Route::get('/show-category/{category}','CategoryController@show');
Route::put('/edit-category/{category}','CategoryController@update');
Route::delete('/delete-category/{category}','CategoryController@destroy');
