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

Route::get('Groupe', function () {
    return view('Groupe.index');
});

Route::post('/Group/AddGroup', 'GroupeController@AddGroupe');
Route::post('/Group/AlreadyExist', 'GroupeController@AlreadyExist');