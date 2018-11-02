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
Route:: group(['prefix' =>'admin'],function() {
    Route:: group(['prefix'=> 'user'],function(){
        Route:: get('user_list','user@user_list');
    });
    
});
Route:: get('thu',function() {
    return view('admin.user.user_list');
});