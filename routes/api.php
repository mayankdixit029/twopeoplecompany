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

Route::get('get_all_questions','CommunityController@getAllQuestions');
Route::post('store-community','CommunityController@storeCommunity');
Route::put('update-community/{id}','CommunityController@updateCommunity');
Route::delete('delete-community/{id}','CommunityController@deleteCommunity');
