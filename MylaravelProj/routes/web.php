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

Route::view('/userview', 'userview');
Route::post('/usercontroller', 'UserController@formSubmit');

Route::get('/user', "Userchecked@submit")->middleware('agechecker');

Route::get('/db', "Users@checkDb");

Route::get('list', "Companies@list");

