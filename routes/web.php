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

    Route::get('/properties', function () {
        return view('properties');
    });
    Route::get('/tenants', function () {
        return view('tenants/tenants');
    });
});
