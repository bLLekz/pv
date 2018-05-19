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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/info', 'InfoController@info')->name('info');
Route::get('/consignment', 'ConsignmentController@consignment')->name('consignment');
Route::post('/consignment/search', 'ConsignmentController@search');
Route::post('/consignment/more', 'ConsignmentController@more');
Route::get('/where', 'WhereController@where')->name('where');
Route::get('/questions', 'QuestionsController@questions')->name('questions');
Route::get('/personal', 'PersonalController@personal')->name('personal');
Route::get('/station', 'StationController@station')->name('station');
Route::get('/message', 'MessageController@message')->name('message');
Route::get('/contacts', 'ContactsController@contacts')->name('contacts');
Route::get('/form', 'FromController@form')->name('form');
Route::get('/consignment/{id}', 'GangController@Gang')->name('Gang');
//Route::get('/message/{id}', 'MessageController@message')->name('message');
//test page
Route::get('/test', 'TestController@test')->name('test');