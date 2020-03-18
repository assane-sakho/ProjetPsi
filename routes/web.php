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
    return view('welcome');
});

/* Groupe */

Route::get('Group', function () {
    return view('group.index');
});
Route::get('GroupInfo', function () {
    return view('groupInfo.index');
});


Route::post('/Group/AddGroup', 'GroupController@AddGroupe');
Route::post('/Group/AlreadyExist', 'GroupController@AlreadyExist');