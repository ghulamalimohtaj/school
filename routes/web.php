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
use App\Greeting;
Route::get('/', function() {
    return view('welcome');
});

Route::get('/students/','studentController@index');
Route::get('/students/{id}','studentController@show');
Route::get('students/add', 'studentController@create');
Route::post('/students','studentController@store');



