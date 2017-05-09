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
Route::get('/admin/user/create',function(){
    return view('/admin/user/create');
});
//Route::get('admin/store',function(){
//    return view('/admin/store');
//});
Route::post('/admin/user/store','TempController@store');
Route::get('/admin/user/show','TempController@show');
//Route::get('/admin/user/show','TempController@chart');