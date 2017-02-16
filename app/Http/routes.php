<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => 'web'], function () {
Route::auth();
Route::get('/','MainController@index');
/* routes for registrar*/
Route::get('enrollmentrequest','RegistrarController\EnrollmentRequest@requestlist');
Route::get('registration','RegistrarController\Registration@index');
Route::get('newstudent','RegistrarController\Registration@newstudent');
});

/*Ajax Registrar*/
Route::get('getid','AjaxRegistrarController\GetId@getid');