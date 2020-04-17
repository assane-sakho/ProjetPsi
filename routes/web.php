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
Route::Get('/Groups/GetAll', 'GroupController@getAll');

/* People */
Route::get('/People/GetPartial', 'PersonController@getPartial');
Route::post('/People/AlreadyExist', 'PersonController@alreadyExist');
Route::post('/People/Add', 'PersonController@add');
Route::post('/People/AddFromImport', 'PersonController@addFromImport');
Route::post('/People/Update', 'PersonController@update');
Route::post('/People/Delete', 'PersonController@delete');
Route::Get('/People/GetAll', 'PersonController@getAll');

/* SchoolYears */
Route::get('/SchoolYears/GetAll', 'SchoolYearController@getAll');

/* GroupPersonYears */
Route::get('/Associations/GetPartial', 'GroupPersonYearController@getPartial');
Route::post('/Associations/AlreadyExist', 'GroupPersonYearController@alreadyExist');
Route::post('/Associations/Add', 'GroupPersonYearController@add');
Route::post('/Associations/Update', 'GroupPersonYearController@update');
Route::post('/Associations/Delete', 'GroupPersonYearController@delete');

/* Status */
Route::get('/Status/GetAll', 'StatusController@getAll');

/* Directory */
Route::get('/Directory/GetAll', 'DirectoryController@getAll');

/* API */
Route::get('/API/GetPartial', 'APIController@getPartial');