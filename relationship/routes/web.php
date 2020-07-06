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
   $user = Auth::user();

  if(!Auth::check()||$user->usertype == 1){
   return redirect('/home/seller');
  }
  else{
  	 return redirect('/home/buyer');
  }
});

Auth::routes();
Route::get('details/', 'BuyerController@index')->name('details');
Route::post('address','BuyerController@createAdddress');
Route::group(['middleware'=>'seller'],function(){
Route::get('/home/buyer', 'HomeController@index');
});
Route::group(['middleware'=>'buyer'],function(){
	Route::get('/home/seller', 'HomeController@seller');

});
Route::get('post/','HomeController@posts');