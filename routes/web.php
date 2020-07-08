<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'SanphamController@home');
Route::get('detail', 'SanphamController@detail');
//Admin
Route::get('login', 'AdminController@login');
Route::get('dashboard', 'AdminController@dashboard');
Route::post('/handle_log', 'AdminController@handle_log');
Route::get('/logout', 'AdminController@logout');

//Handle product
Route::group(['prefix' => 'product'], function(){
    Route::get('/', 'SanPhamController@show');
    Route::post('/create', 'SanPhamController@create');
    Route::post('/addimage', 'SanPhamController@addimage');
    Route::post('/test', 'SanPhamController@test');
});