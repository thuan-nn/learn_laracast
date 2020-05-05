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

use App\Events\OrderStatusUpdated;

Route::get('/', 'HomeController@index');

//Route::get('/update', 'HomeController@update');

//Route::get('contact/image.jpg', 'Api\ContactController@blankImage');

Route::get('/tasks', 'TaskController@index');

Route::post('/tasks', 'TaskController@create');

Route::get('/api/project/{project}', 'ProjectController@getTasks');

Route::post('/api/project/{project}/tasks', 'ProjectController@createTasks');

Route::get('/project/{project}', 'ProjectController@show');
