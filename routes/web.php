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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form','FormController@form');
Route::post('/post','FormController@form_submit');
Route::get('/contact_data','FormController@contact_data');
Route::get('/edit_form/{id}','FormController@edit_form');
Route::post('/edit_contact_submit/{id}','FormController@edit_contact_submit');
Route::get('/delete_contact/{id}','FormController@delete_contact');
