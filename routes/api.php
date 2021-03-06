<?php

use Illuminate\Http\Request;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/*
Route::get('users', 'UserApiController@getAllUsers');
Route::get('users/{id}', 'UserApiController@getUser');
Route::post('users', 'UserApiController@createUser');
Route::put('users/{id}', 'UserApiController@updateUser');
Route::delete('users/{id}','UserApiController@deleteUser');
*/
Route::resource('users', 'UserController');
Route::resource('albums', 'AlbumController');
