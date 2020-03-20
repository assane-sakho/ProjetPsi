<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/* Group */
Route::get('/Group/GetPartial', 'GroupController@getPartial');
Route::post('/Group/AlreadyExist', 'GroupController@alreadyExist');
Route::post('/Group/AddGroup', 'GroupController@addGroup');
Route::post('/Group/EditGroup', 'GroupController@editGroup');
Route::post('/Group/DeleteGroup', 'GroupController@deleteGroup');

/* Person */
Route::get('/Person/GetPartial', 'PersonController@getPartial');
Route::get('/Person/GetAddModal', 'PersonController@getAddModal');

/* GroupPersonYear */
Route::get('/Association/GetPartial', 'GroupPersonYearController@getPartial');

/* Status */
Route::get('/Status/GetStatuses', 'StatusController@getStatuses');

/* Directory */
Route::get('/Directory/GetDirectories', 'DirectoryController@getDirectories');

/* API */
Route::get('/API/GetPartial', 'APIController@getPartial');
