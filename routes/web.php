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

Route::get('/','FrontEndController@home')->name('home');

Route::get('/contact-us','FrontEndController@contact')->name('contact');

Route::get('/board-member','FrontEndController@team')->name('team');

Route::get('/mission-vision','FrontEndController@mission')->name('mission');

Route::get('/goals-objective-strategies','FrontEndController@goal')->name('goal');
Route::get('/others','FrontEndController@other')->name('other');
Route::get('/projects','FrontEndController@project')->name('project');
