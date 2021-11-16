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
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/galery', function () {
    return view('pages.galery');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/blog/details', function () {
    return view('pages.blog-details');
});

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/classification', function () {
    return view('pages.classification');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
