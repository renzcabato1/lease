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



Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/', 'HomeController@index');

    //Properties
    Route::resource('/properties', 'PropertyController');

    //Tenants
    Route::get('/tenants/create', 'TenantController@create');
    Route::get('/tenants/delete/{id}', 'TenantController@destroy');
    Route::get('/tenants/edit/{id}', 'TenantController@edit');
    Route::get('/tenants/view/{id}', 'TenantController@show');
    Route::get('/tenants/view/units/{id}', 'TenantController@showUnit');
    Route::put('/tenants/{id}', 'TenantController@update');
    Route::resource('/tenants', 'TenantController');
});
