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
Route::get('role_permission','RoleController@role_permission');
Route::post('/role-permission-store', 'RoleController@store');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['\App\Http\Middleware\Authenticate', 'App\Http\Middleware\RolePermissionMiddleware']], function () {
Route::get('/form','FormController@form')->defaults('identity', 'form,r');
Route::post('/post','FormController@form_submit')->defaults('identity', 'form,r');;
Route::get('/contact_data','FormController@contact_data')->defaults('identity', 'table,r');
Route::get('/edit_form/{id}','FormController@edit_form')->defaults('identity', 'form,u');
Route::post('/edit_contact_submit/{id}','FormController@edit_contact_submit')->defaults('identity', 'form,u');
Route::get('/delete_contact/{id}','FormController@delete_contact');
});