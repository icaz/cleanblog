<?php

Route::get('/', function () {
    return view('guest.welcome');
})->name('welcome');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
Route::get('/kontakti', function () {
    return view('admin.kontakti');
})->name('kontakti');
Route::get('/e-mail_list', function () {
    return view('guest.e-mail');
})->name('e-mail_list');
Route::get('/kontakt', function () {
    return view('guest.contact');
})->name('kontakt');

Route::get('/kategorije', 'CategoryController@index')->name('kategorije');
Route::get('/tagovi', 'TagController@index')->name('tagovi');

Route::post('email', 'EmailController@store')->name('email');
Route::post('qemail', 'EmailController@qstore')->name('qemail');
Route::post('contact', 'ContactController@store')->name('contact');
Route::post('category', 'CategoryController@store')->name('category');
Route::post('tag', 'TagController@store')->name('tag');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Admin Routes
Route::group(['namespace' => 'Admin'], function () {
    Route::resource('dashboard/user', 'UserController');
    Route::resource('dashboard/post', 'PostController');
    Route::resource('dashboard/tag', 'TagController');
    Route::resource('dashboard/category', 'CategoryController');
});


