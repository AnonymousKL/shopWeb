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
Route::get('detail/{id}', 'SanphamController@detail')->name('detail');
//Admin
Route::get('login', 'AdminController@login');
Route::get('dashboard', 'AdminController@dashboard');
Route::post('handle_log', 'AdminController@handle_log');
Route::get('logout', 'AdminController@logout');
Route::get('register', 'AdminController@register');
Route::post('handle_reg', 'AdminController@handle_reg');

//Handle product
// Route::group(['prefix' => 'product'], function(){
//     Route::get('/', 'SanPhamController@show');
//     Route::post('/create', 'SanPhamController@create');
//     Route::get('/addimage', 'SanPhamController@showaddimage')->name('addimage');
//     Route::post('/addimage', 'SanPhamController@addimage');
//     Route::post('/test', 'SanPhamController@test');
// });
Route::resource('sanpham', 'SPController');
//(chi can goi action den sanpham, method = post de goi ham store)

//Collection
Route::get('collection/{id}', 'CollectionController@collection')->name('collection');
Route::get('payment', 'SanphamController@payment');

//test
Route::resource('test', 'TestController');

Route::get('search', function(){
    $keyword = $_GET['keyword'];
    $search = DB::table('san_phams')->where('tenSP','like','%'.$keyword.'%')->get();
   return view('admin.search', compact('search'));
});
Route::get('searchsp', function(){
    $keyword = $_GET['keyword'];
    $search = DB::table('san_phams')->where('tenSP','like','%'.$keyword.'%')->get();
   return view('search', compact('search'));
});
Route::get('AddCart/{id}','CartController@AddCart');
Route::get('cart', function(){
    return view('cart');
});