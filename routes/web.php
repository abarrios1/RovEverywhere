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

Route::get('/', "HomeController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/forward/{pwm}', 'WheelController@forward')->name('forward');
Route::get('/reverse/{pwm}', 'WheelController@reverse')->name('reverse');
Route::get('/left/{pwm}', 'WheelController@left')->name('left');
Route::get('/right/{pwm}', 'WheelController@right')->name('right');

Route::get('/stop', 'WheelController@stop')->name('stop');
