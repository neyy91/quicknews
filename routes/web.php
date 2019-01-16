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

Route::get('/', 'IndexController@index')->name('main');

Route::get('/bullet/{id}', 'IndexController@redirectToBullet')->name('bullet');

Route::get('/productsCat', 'IndexController@filterByCategory')->name('productsCat');

Route::get('/manager', 'IndexController@manager')->name('manager');

Route::get('/add', 'IndexController@addBullet')->name('addBullet');

Route::get('/edit/{id}', 'IndexController@editBullet')->name('edit');

Route::get('/delete/{id}', 'IndexController@delete')->name('delete');


