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
});

/* Groupe */

Route::post('/Group/AddGroup', 'GroupController@AddGroupe');
Route::post('/Group/AlreadyExist', 'GroupController@AlreadyExist');

Route::get('/GroupInfo/GetPartial', 'GroupInfoController@GetPartial');
Route::get('/Group/GetPartial', 'GroupController@GetPartial');
Route::get('/Person/GetPartial', 'PersonController@GetPartial');
Route::get('/API/GetPartial', 'APIController@GetPartial');