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

use App\Http\Controllers\blogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\myController;

Route::get('/', function () {
    return view('b.index');
});


Route::get('phong', function () {
    return view('b.rooms');
});


Route::get('contact', function () {
    return view('b.contact');
});
Route::get('home', 'myController@index');
//dặt phòng
Route::get('datphong', function () {
    return view('b.new');
});
Route::get('/post', [
    'as'=>'post.index',
    'uses'=>'blogController@index'
]);

Route::post('/post',[
    'as'=>'post.store',
    'uses' => 'blogController@store'
]);

Route::get('/post/{id}/edit',[
    'as'=>'post.edit',
    'uses'=> 'blogController@edit'
]);
Route::put('post/{id}', [
    'as'=>'post.update',
    'uses'=>'blogController@update'
]);
Route::get('post/{id}','blogController@show'); 
Route::delete('/post/{id}',[
    'as' => 'post.delete',
    'uses' => 'blogController@destroy'
]);
//ý kiến 
Route::get('/adcontact', [
    'as'=>'contact.index',
    'uses'=>'ContactController@index'
]);

Route::post('/adcontact',[
    'as'=>'contact.store',
    'uses' => 'ContactController@store'
]);
Route::get('contact', function () {
    return view('b.contact');
});
//events
Route::get('sukien','EventsController@sukien');
Route::get('/events', [
    'as'=>'events.index',
    'uses'=>'EventsController@index'
]);
Route::post('/events',[
    'as'=>'evetns.file',
    'uses' => 'EventsController@store'
]);
Route::post('/events',[
    'as'=>'events.store',
    'uses' => 'EventsController@store'
]);
Route::get('events/new','EventsController@new');
Route::get('/events/{id}/edit',[
    'as'=>'events.edit',
    'uses'=> 'EventsController@edit'
]);
Route::put('events/{id}', [
    'as'=>'events.update',
    'uses'=>'EventsController@update'
]);
Route::get('events/{id}','EventsController@show'); 
Route::get('xemthem/{id}','EventsController@xemthem'); 
Route::delete('/events/{id}',[
    'as' => 'events.delete',
    'uses' => 'EventsController@destroy'
]);

