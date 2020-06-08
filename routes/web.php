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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task-list/{search?}', 'TodoController@index')->name('task-list');
Route::get('/task-create', 'TodoController@create')->name('task-create');
Route::POST('/task-add', 'TodoController@store')->name('task-add');
Route::get('/task-edit/{task}', 'TodoController@edit')->name('task-edit');
Route::PATCH('/task-update/{task}', 'TodoController@update')->name('task-update');
Route::delete('/task-delete/{task}', 'TodoController@destroy')->name('task-delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
