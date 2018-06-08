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
//pages
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/info', 'HomeController@info')->name('info');
Route::get('/where', 'HomeController@where')->name('where');
Route::get('/questions', 'HomeController@questions')->name('questions');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
//parti
Route::get('/consignment', 'ConsignmentController@consignment')->name('consignment');
Route::post('/consignment/search', 'ConsignmentController@search');/*живой поиск по партиям*/
Route::post('/consignment/more', 'ConsignmentController@more');/*показать больше партий*/
Route::get('/consignment/{id}', 'GangController@Gang')->name('Gang');
//lk
Route::get('/personal', 'PersonalController@personal')->name('personal');
Route::post('/personal/update', 'PersonalController@update');/*обновление у избирателя*/
Route::post('/personal/password', 'PersonalController@password');/*смена пароля*/
Route::post('/personal/update2', 'PersonalController@update2');/*обновление у кандидата*/
Route::get('/station', 'StationController@station')->name('station');
Route::get('/message', 'MessageController@message')->name('message');
Route::get('/message/{id}', 'MessageController@show');/*открытие сообщений*/
Route::post('/message/{id}', 'MessageController@send');/*отправка сообщений*/
Route::get('/form', 'FromController@form')->name('form');
//тестовая страница
Route::get('/test', 'TestController@test')->name('test');