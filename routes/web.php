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


Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'PagesController@homepage')->name('homepage');
Route::get('/home', 'HomeController@index')->name('logindisplay');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');
Route::post('/contact', 'PagesController@store')->name('contact.store');
