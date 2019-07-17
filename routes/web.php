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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-country', 'Country\CountryController@viewAddCountry')->name('view.add.country');
Route::get('/add-state', 'State\StateController@viewAddState')->name('view.add.state');

Route::post('/create-country', 'Country\CountryController@addCountry')->name('create.country');
Route::post('/create-state', 'State\StateController@addState')->name('create.state');
