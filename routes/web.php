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

//testing

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact',function()
{
	return view('contact');
});

Route::post('/contact','homecontroller@contactinsert');


Route::get('/contactview','homecontroller@view');

Route::get('/editcontact/{id}','homecontroller@edit');

Route::post('/editinsert/{id}','homecontroller@editinsert');

Route::get('/deletecontact/{id}','homecontroller@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
