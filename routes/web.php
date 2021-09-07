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

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/caratteri', 'ComicController@caratteri')->name('caratteri');

Route::get('/fumetti', 'ComicController@fumetti')->name('fumetti');

Route::get('/films', 'ComicController@film')->name('films');

Route::get('/television', 'ComicController@vision')->name('television');

Route::get('/giochi', 'ComicController@giochi')->name('giochi');

Route::get('/collezionabili', 'ComicController@meme')->name('collezionabili');

Route::get('/video', 'ComicController@video')->name('video');

Route::get('/supporters', 'ComicController@fans')->name('supporters');

Route::get('/novità', 'HomeController@news')->name('novità');

Route::get('/negozio', 'HomeController@shop')->name('negozio');
