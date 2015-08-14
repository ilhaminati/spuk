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

Route::get('/', 'KarateController@index');
Route::get('/tambah', 'KarateController@tambah');
Route::get('/lihat', 'KarateController@lihat');
Route::post('/save-nilai', 'KarateController@saveNilai');
Route::get('download', array('uses' => 'KarateController@download', 'as' => 'karate.download'));