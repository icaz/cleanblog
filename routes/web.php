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

Route::get('/', function () {
    return view('guest.welcome');
})->name('welcome');

Route::get('/kategorije', function () {
    return view('guest.category');
})->name('kategorije');

Route::get('/tagovi', function () {
    return view('guest.tag');
})->name('tagovi');

Route::get('/e-mail_list', function () {
    return view('guest.e-mail');
})->name('e-mail_list');

Route::post('email', 'EmailController@store')->name('email');

Route::get('/kontakt', function () {
    return view('guest.contact');
})->name('kontakt');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
