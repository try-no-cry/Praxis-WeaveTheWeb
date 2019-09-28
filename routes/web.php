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
    return view('welcome');
});

Route::get('timeline', function () {
    return view('timeline');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/uploadImages', function () {
    return view('uploadImages');
});

Route::post('/uploadImages','HomeController@uploadImages')->name('uploadImages');


Route::get('/uploadArticle', function () {
    return view('uploadArticle');
});

// Route::get('','HomeController@')-name('');

Route::post('/uploadArticle','HomeController@uploadArticle')->name('uploadArticle');



Route::get('/timeline', function () {
    return view('timeline');
});
Route::get('/timeline1', function () {
    return view('timline1');
});
Route::get('/timeline2', function () {
    return view('timeline2');
});