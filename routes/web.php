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
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/store', 'LegislatorController@store')->name('store');
Route::get('/legisladores', 'LegislatorController@display')->name('display');
Route::get('/edit/{id}', 'LegislatorController@edit')->name('edit');
Route::get('/update/{id}', 'LegislatorController@update')->name('update');
Route::get('/destroy/{id}', 'LegislatorController@destroy')->name('destroy');


