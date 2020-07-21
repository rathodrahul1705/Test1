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
Route::get('/users','UserController@user');
Route::get('/role','RoleController@role');
Route::get('/role_create','RoleController@role_create');
Route::get('/role_edit/{role_id}','RoleController@role_edit');
Route::post('/role_edit_Save/{role_id}','RoleController@role_edit_Save');
Route::get('/role_delete/{role_id}','RoleController@role_delete');
Route::post('/role_Save','RoleController@role_Save');
Route::get('/permission','RoleController@permission');
Route::get('/permission_create','RoleController@permission_create');
Route::post('/permission_Save','RoleController@permission_Save');
Route::get('/permission_edit/{permission_id}','RoleController@permission_edit');
Route::post('/permission_edit_save/{permission_id}','RoleController@permission_edit_save');
Route::get('/permission_delete/{permission_id}','RoleController@permission_delete');



Route::group(['middleware' => ['\App\Http\Middleware\Authenticate', 'App\Http\Middleware\RolePermissionMiddleware']], function () {

Route::get('/form','FormController@form')->defaults('identity', 'form,r');

Route::post('/post','FormController@form_submit')->defaults('identity', 'form,r');

Route::get('/contact_data','FormController@contact_data')->defaults('identity', 'table,r');

Route::get('/edit_form/{id}','FormController@edit_form')->defaults('identity', 'table,u');

Route::post('/edit_contact_submit/{id}','FormController@edit_contact_submit')->defaults('identity', 'form,u');

Route::get('/delete_contact/{id}','FormController@delete_contact')->defaults('identity','table,d');

});

