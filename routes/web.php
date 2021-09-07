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
    return view('home');
})->name('homepage');

Route::get('/caratteri', function () {
    return view('CHARACTERS');
})->name('caratteri');

Route::get('/fumetti', function () {
    return view('COMICS');
})->name('fumetti');

Route::get('/films', function () {
    return view('MOVIES');
})->name('films');

Route::get('/television', function () {
    return view('TV');
})->name('television');

Route::get('/giochi', function () {
    return view('GAMES');
})->name('giochi');

Route::get('/collezionabili', function () {
    return view('COLLECTIBLES');
})->name('collezionabili');

Route::get('/video', function () {
    return view('VIDEOS');
})->name('video');

Route::get('/supporters', function () {
    return view('FANS');
})->name('supporters');

Route::get('/novità', function () {
    return view('NEWS');
})->name('novità');

Route::get('/negozio', function () {
    return view('SHOP');
})->name('negozio');
