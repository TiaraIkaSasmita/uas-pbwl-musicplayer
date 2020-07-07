<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/artist', 'artistController@index')->name('artist');
Route::get('/artist/create', 'artistController@create');
Route::post('/artist', 'artistController@store');
Route::get('artist/{id}/edit', 'artistController@edit');
Route::patch('artist/{id}', 'artistController@update');
Route::delete('artist/{id}','artistController@destroy');


Route::get('/album', 'albumController@index');
Route::get('/album/create', 'albumController@create');
Route::post('/album', 'albumController@store');
Route::get('album/{id}/edit', 'albumController@edit');
Route::patch('album/{id}', 'albumController@update');
Route::delete('album/{id}','albumController@destroy');


Route::get('/track', 'trackController@index');
Route::get('/track/create', 'trackController@create');
Route::post('/track', 'trackController@store');
Route::get('track/{id}/edit', 'trackController@edit');
Route::patch('track/{id}', 'trackController@update');
Route::delete('track/{id}','trackController@destroy');


Route::get('/played', 'playedController@index');
Route::get('/played/create', 'playedController@create');
Route::post('/played', 'playedController@store');
Route::get('played/{id}/edit', 'playedController@edit');
Route::patch('played/{id}', 'playedController@update');
Route::delete('played/{id}','playedController@destroy');