<?php

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

Route::get('/', 'LandingController@landing');
Route::post('/probs', 'LandingController@insertProbs');

Route::get('/product', 'ProductController@showAll');
Route::get('/product/{id}', 'ProductController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
