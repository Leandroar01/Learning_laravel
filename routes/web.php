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

Route::group([
    'middleware' => ([]),
    'prefix'=>'admin'
], function () {
    /*
    Route::group([
        'prefix' => 'product'], function () {
            Route::delete('/{id}/delete','ProductController@destroy') -> name('product.delete'); 
            Route::put('/{id}','ProductController@update') -> name('product.edit');
            Route::get('/{id}/edit','ProductController@edit') -> name('product.edit'); 
            Route::get('/create','ProductController@create') -> name('product.create');
            Route::get('/show/{id}', 'ProductController@show') -> name('product.show');
            Route::get('/','ProductController@index') -> name('product.product');
            Route::post('/product','ProductController@store') -> name('product.store');
                   
    });*/
    
    Route::resource('product', 'ProductController');
        
    Route::get('/', function () {
        return view('welcome');
    });
});