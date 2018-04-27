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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/employee-tree', 'EmployeeController@tree')->middleware('auth');
Route::get('/employee', 'EmployeeController@index')->middleware('auth')->name('employee');
Route::get('/employee/create', 'EmployeeController@create')->name('employee.create')->middleware('auth');
Route::post('/employee/store', 'EmployeeController@store')->name('employee.store')->middleware('auth');
Route::get('/employee/{employee}/edit', 'EmployeeController@edit')->name('employee.edit')->middleware('auth');
Route::put('/employee/{employee}', 'EmployeeController@update')->name('employee.update')->middleware('auth');
Route::get('/employee/{employee}/show', 'EmployeeController@show')->name('employee.show')->middleware('auth');
