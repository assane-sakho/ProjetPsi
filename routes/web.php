<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/* Group */
Route::get('/Group/GetPartial', 'GroupController@getPartial');
Route::get('/Group/AlreadyExist', 'GroupController@alreadyExist');
Route::get('/Group/AddGroup', 'GroupController@addGroup');

/* Person */
Route::get('/Person/GetPartial', 'PersonController@getPartial');

/* GroupPersonYear */
Route::get('/Association/GetPartial', 'GroupPersonYearController@getPartial');

/* API */
Route::get('/API/GetPartial', 'APIController@getPartial');