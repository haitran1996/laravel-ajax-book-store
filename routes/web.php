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

Route::group(['middleware' => 'web'], function () {
    Route::get('/register', "RegisterController@show")->name("register.show");
    Route::post('/register', "RegisterController@register")->name("register");

    Route::middleware('checkLogin')->prefix('shop')->group(function () {
        Route::get('', 'ShopController@index')->name('shop.home');
        Route::get('/cart', function () {
            return view('shop.shop-cart');
        });
        Route::get('/product-page', function () {
            return view('shop.product-page');
        })->name('cart');
        Route::get('/add/{id}', 'CartController@add')->name('cart.add');
        Route::get('/books', 'ShopController@books')->name('shop.books');
    });

    Route::middleware(['checkLogin', 'checkAdmin'])->prefix('admin')->group(function () {
        Route::get('', function () {
            return view('admin.home');
        })->name('admin.home');
        Route::prefix('user')->group(function () {
            Route::get('/', 'UserController@index')->name('admin.user.index');
            Route::get('/create', 'UserController@showFormCreate')->name('admin.user.create');
            Route::post('/store', 'UserController@store')->name('admin.user.store');
            Route::get('/{id}/edit', 'UserController@showFormEdit')->name('admin.user.edit');
            Route::post('/{id}/update', 'UserController@update')->name('admin.user.update');
            Route::get('/{id}/delete', 'UserController@delete')->name('admin.user.delete');
            Route::get('/search', 'UserController@search')->name('admin.user.search');
        });


    Route::prefix('product')->group(function (){
        Route::get('/','ProductController@index')->name('product.list');
        Route::get('/create','ProductController@create')->name('product.create');
        Route::post('/store','ProductController@store')->name('product.store');
        Route::get('/{id}/delete','ProductController@delete')->name('product.delete');
        Route::get('/{id}/edit','ProductController@edit')->name('product.edit');
        Route::post('/{id}/update','ProductController@update')->name('product.update');
        Route::get('/search','ProductController@search')->name('product.search');
    });
        Route::prefix('/category')->group(function () {
            Route::get('/', 'CategoryController@index')->name('category.list');
            Route::get('/create', 'CategoryController@create')->name('category.create');
            Route::post('/create', 'CategoryController@store')->name('category.store');
            Route::get('/delete/{id}', 'CategoryController@delete')->name('category.delete');
            Route::get('/{id}/edit', 'CategoryController@edit')->name('category.edit');
            Route::post('/{id}/update', 'CategoryController@update')->name('category.update');
            Route::get('/search', 'CategoryController@search')->name('category.search');

        });
        Route::prefix('/blog')->group(function () {
            Route::get('/', 'BlogController@index')->name('admin.blog.list');
            Route::get('/create', 'BlogController@create')->name('admin.blog.create');
            Route::post('/create', 'BlogController@store')->name('admin.blog.store');
            Route::get('/delete/{id}', 'BlogController@delete')->name('admin.blog.delete');
            Route::get('/{id}/edit', 'BlogController@edit')->name('admin.blog.edit');
            Route::post('/{id}/update', 'BlogController@update')->name('admin.blog.update');
        });
        Route::prefix('/author')->group(function (){
            Route::get('/','AthorController@index')->name('admin.author.list');
            Route::get('/create','AthorController@create')->name('admin.author.create');
            Route::post('/store','AthorController@store')->name('admin.author.store');
            Route::get('/{id}/delete','AthorController@delete')->name('admin.author.delete');
            Route::get('/{id}/edit','AthorController@edit')->name('admin.author.edit');
            Route::post('/{id}/update','AthorController@update')->name('admin.author.update');
            Route::post('/search','AthorController@search')->name('admin.author.search');
        });
        Route::prefix('/publisher')->group(function (){
            Route::get('/','PublisherController@index')->name('admin.publisher.list');
            Route::get('/create','PublisherController@create')->name('admin.publisher.create');
            Route::post('/store','PublisherController@store')->name('admin.publisher.store');
            Route::get('/{id}delete','PublisherController@delete')->name('admin.publisher.delete');
            Route::get('/{id}edit','PublisherController@edit')->name('admin.publisher.edit');
            Route::post('/{id}update','PublisherController@update')->name('admin.publisher.update');
        });
    });


    Route::get('/login', 'LoginController@index')->name('login.index');
    Route::post('/login', 'LoginController@login')->name('login');
    Route::get('/logout', 'LoginController@logout')->name('logout');


});


