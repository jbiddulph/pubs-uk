<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('passports','PassportController');
Route::resource('publistadmin','PubController');
Route::get('/pubs/{town}','PubsTown@index');
Route::get('/pubs/{town}/map','PubsTown@gmaps');
Route::get('/','PubsTown@pubslist');


// Route::get('pubs/{town}', function($town) {
    
    
// });
