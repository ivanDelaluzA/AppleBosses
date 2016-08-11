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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', 'UserController');
Route::resource('colonies/scopes', 'ColonyScopesController');
Route::resource('colonies/settlement-types', 'SettlementTypesController');
Route::resource('colonies', 'ColonyController');

Route::resource('notifications', 'NotificationsController');

Route::resource('permissions', 'PermissionsController');

Route::resource('personalInformations', 'PersonalInformationsController');

Route::resource('requests', 'RequestsController');

Route::resource('requestsStates', 'RequestStatesController');

Route::resource('requestsTypes', 'RequestTypesController');

Route::resource('roles', 'RolesController');

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
