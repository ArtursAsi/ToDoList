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
Route::get('/', 'ToDoController@home');

Route::get('/todos', 'ToDoController@index')->name('todos.index');
Route::get('/todos/create', 'ToDoController@create')->name('todos.create');
Route::post('/todos', 'ToDoController@store')->name('todos.store');
Route::get('/todos/{todo}', 'ToDoController@show')->name('todos.show');
Route::get('/todos/{todo}/edit', 'ToDoController@edit')->name('todos.edit');
Route::patch('/todos/{todo}', 'ToDoController@update')->name('todos.update');
Route::delete('/todos/{todo}', 'ToDoController@destroy')->name('todos.destroy');
Route::post('/todos/{todo}/completed', 'ToDoController@completed')->name('todos.completed');
