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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'BaseController@getIndex');
Route::get('/login-form', 'BaseController@login');

Auth::routes();
//Ajax
Route::post('/ajax/modal', 'Ajax\ModalController@postOne');
//Others

Route::get('/home', 'HomeController@index')->name('home');
Route::post('home', 'HomeController@postIndex');
Route::get('product/delete/{id}', 'HomeController@getDelete');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::group(['middleware' => ['auth']], function () {
Route::get('home', 'HomeController@index');
Route::get('home/edit', 'HomeController@edit');
});
//Route::group(['middleware' => ['auth']], function () {
//   // Route::get('home', 'BestController@index');
//   // Route::get('home/edit', 'BestController@edit');
//});
