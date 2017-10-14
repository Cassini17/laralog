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

Route::get('/','PostsController@index')->name('home');

//Route::get('/home',function(){ return redirect('/'); });

Route::get('/posts/create','PostsController@create');

Route::get('/posts/tags/{tag}','TagsController@index');

Route::post('/posts','PostsController@store');

Route::get('/posts/{post}','PostsController@show');

Route::post('/posts/{post}/comments','CommentsController@store');

Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');

Route::get('/cassini','FredController@info');

Route::get('/saturn/test','FredController@test');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile','UserController@profile');

Route::post('/profile','UserController@update_avatar');

Route::get('/memos/create','MemosController@create');

Route::post('/memos','MemosController@store');

Route::get('/memos','MemosController@index');