<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/* Groups */
Route::get('/Groups/GetPartial', 'GroupController@getPartial');
Route::post('/Groups/AlreadyExist', 'GroupController@alreadyExist');
Route::post('/Groups/Add', 'GroupController@add');
Route::post('/Groups/Update', 'GroupController@update');
Route::post('/Groups/Delete', 'GroupController@delete');

/* People */
Route::get('/People/GetPartial', 'PersonController@getPartial');
Route::post('/People/AlreadyExist', 'PersonController@alreadyExist');
Route::post('/People/Add', 'PersonController@add');
Route::post('/People/Update', 'PersonController@update');
Route::post('/People/Delete', 'PersonController@delete');


/* GroupPersonYears */
Route::get('/Associations/GetPartial', 'GroupPersonYearController@getPartial');

/* Status */
Route::get('/Status/GetStatuses', 'StatusController@getStatuses');

/* Directory */
Route::get('/Directory/GetDirectories', 'DirectoryController@getDirectories');

/* API */
Route::get('/API/GetPartial', 'APIController@getPartial');
Route::get('/API/GetAssociation', 'APIController@getAssociation');
