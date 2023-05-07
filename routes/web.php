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


Route::get('', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::group(['namespace' => 'Admin', 'middleware' => ['role:admin'], 'prefix'=> 'admin'], function(){//prefix подставляет admin во всё что внутри группы в пути , namespace группа контрорреров в папке Admin middleware дал доступ роли админу

    Route::get('', 'AdminController@index')->name('admin');
    Route::get('/product', 'ProductController@index')->name('admin.product');
    Route::get('/product/{prod}/edit','ProductController@edit')->name('admin.product.edit');
    Route::PATCH('/product/{prod}', 'ProductController@update')->name('admin.product.update');
    Route::get('/product/create', 'ProductController@create')->name('admin.product.create');
    Route::post('/product', 'ProductController@store')->name('admin.product.store');
    Route::delete('/product/{prod}', 'ProductController@destroy')->name('admin.product.destroy');
});


Auth::routes();
