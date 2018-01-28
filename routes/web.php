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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => 'admin'], function(){

    Route::get('/admin', [
        'uses' => 'AdminController@index',
        'as' => 'admin.index'
    ]);

    Route::get('/admin/paginas', [
        'uses' => 'AdminController@pages',
        'as' => 'admin.pages'
    ]);

    Route::get('/admin/paginas/criar', [
        'uses' => 'AdminController@pagesCreate',
        'as' => 'admin.pages.create'
    ]);

    Route::post('/admin/pagina', [
        'uses' => 'AdminController@storePage',
        'as' => 'admin.pages.store'
    ]);

});
