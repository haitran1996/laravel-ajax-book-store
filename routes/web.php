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

use Illuminate\Support\Facades\Route;


 Route::get('/register', "RegisterController@show")->name("register.show");
 Route::post('/register', "RegisterController@register")->name("register");

Route::prefix('shop')->group(function (){
    Route::get('', function () {
        return view("shop.home");
    });
});

Route::prefix('admin')->group(function(){
    Route::get('', function () {
        return view('admin.home');
    });
    Route::prefix('user')->group(function () {
        Route::get('', 'UserController@index')->name('admin.user.index');
    });
    Route::prefix('product')->group(function (){
        Route::get('/','ProductController@index')->name('product.list');
        Route::get('/create','ProductController@create')->name('product.create');
        Route::post('/store','ProductController@store')->name('product.store');
    });
});


Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@login')->name('login');
Route::get('/logout','LoginController@logout')->name('logout');

