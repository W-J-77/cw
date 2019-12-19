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
//dd(app());

Route::get('/', function () {return view('welcome');});
Route::get('/stalls/{grape}', function ($grape) {return view('stall',['grape'=>$grape]);});
Route::get('grapes','GrapeController@index')->name('grapes.index');
Route::get('grapes/create','GrapeController@create')->name('grapes.create')->middleware('auth');
Route::post('grapes','GrapeController@store')->name('grapes.store')->middleware('auth');
Route::get('grapes/{id}','GrapeController@show')->name('grapes.show');
Route::delete('grapes/{id}','GrapeController@destroy')->name('grapes.destroy');
Route::put('grapes/update/{id}','GrapeController@update')->name('grapes.update');
Route::get('grapes/{id}/edit','GrapeController@edit')->name('grapes.edit');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){return view('welcome');})->middleware('polite');
Route::get('/comments','CommentController@page');

Route::get('exampleroute','GrapeController@examoleMethod');
//app()->bind('twitter',function ($app){ return new Twitter(); });
//app()->singleton('App\twitter',function($app){ return new Twitter('Some Secret Key');});
