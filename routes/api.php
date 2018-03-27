<?php

use Illuminate\Http\Request;
use App\Country;
use App\Post;
use App\User;
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

Route::get('countries', 'CountryController@index');
Route::get('countries/{country}', 'CountryController@show');
Route::post('countries', 'CountryController@store');
Route::put('countries/{country}', 'CountryController@update');
Route::delete('countries/{country}', 'CountryController@delete');

Route::get('countries/{country}/users', 'UserController@showUsersByCountry');

Route::get('posts', 'PostController@index');
Route::get('posts/{post}', 'PostController@show');
Route::post('posts', 'PostController@store');
Route::put('posts/{post}', 'PostController@update');
Route::delete('posts/{post}', 'PostController@delete');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@delete');
