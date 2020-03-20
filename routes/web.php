<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/* Group */
Route::get('/Group/GetPartial', 'GroupController@getPartial');
Route::post('/Group/AlreadyExist', 'GroupController@alreadyExist');
Route::post('/Group/Add', 'GroupController@add');
Route::post('/Group/Update', 'GroupController@update');
Route::post('/Group/Delete', 'GroupController@delete');

/* Person */
Route::get('/Person/GetPartial', 'PersonController@getPartial');
Route::post('/Person/AlreadyExist', 'PersonController@alreadyExist');
Route::post('/Person/Add', 'PersonController@add');
Route::post('/Person/Update', 'PersonController@update');
Route::post('/Person/Delete', 'PersonController@delete');


/* GroupPersonYear */
Route::get('/Association/GetPartial', 'GroupPersonYearController@getPartial');

/* Status */
Route::get('/Status/GetStatuses', 'StatusController@getStatuses');

/* Directory */
Route::get('/Directory/GetDirectories', 'DirectoryController@getDirectories');

/* API */
Route::get('/API/GetPartial', 'APIController@getPartial');
