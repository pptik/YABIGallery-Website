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

Route::get('/map', 'CInformasi@index');
Route::get('/', 'CInformasi@home');
Route::get('/gallery', 'CInformasi@gallery');
Route::get('/upload', 'CInformasi@uploadgallery');
/*Route::get('/', function (){
    cas()->authenticate();
});*/

Route::get('tes', function () {
    return view('tes-map');
});
Route::get('maps/get_cctv', 'CMap@getCCTV');
Route::get('maps/get_gpstracer', 'CMap@getgpstracer');
Route::get('maps/get_socialreport', 'CMap@getsocialreport');
Route::get('search', 'CMap@search');