<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your Module. These routes
| are loaded by the module's RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('surah', 'SurahController@index');
Route::get('surah/all', 'SurahController@all');
Route::get('surah/{surah}', 'SurahController@show');
Route::get('language', 'LanguageController@index');
Route::get('pdf/{file}', 'QuranController@index');
Route::get('tag/surah/{surah}/ayah/{ayah}', 'TagController@add');
Route::get('tag-remove/surah/{surah}/ayah/{ayah}', 'TagController@remove');