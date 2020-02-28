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
//cai nay cua anh will
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('contact/image.jpg', 'Api\ContactController@blankImage');
