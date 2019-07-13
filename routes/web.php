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
Route::group(['prefix' => 'note_types'], function () {
    Route::get('/', 'NoteTypeController@index')->name('note_types.index');
    Route::get('/create', 'NoteTypeController@create')->name('note_types.create');
    Route::post('/add', 'NoteTypeController@add')->name('note_types.add');
    Route::get('{id}/edit', 'NoteTypeController@edit')->name('note_types.edit');
    Route::post('{id}/update', 'NoteTypeController@update')->name('note_types.update');
    Route::get('{id}/delete', 'NoteTypeController@delete')->name('note_types.delete');
    Route::get('{id}/destroy', 'NoteTypeController@destroy')->name('note_types.destroy');
    Route::get('{id}/show', 'NoteTypeController@show')->name('note_types.show');
});
Route::group(['prefix' => 'notes'], function () {
    Route::get('/', 'NoteController@index')->name('notes.index');
    Route::get('/create', 'NoteController@create')->name('notes.create');
    Route::post('/add', 'NoteController@add')->name('notes.add');
    Route::get('/{id}/edit', 'NoteController@edit')->name('notes.edit');
    Route::post('/{id}/update', 'NoteController@update')->name('notes.update');
    Route::get('/{id}/delete', 'NoteController@delete')->name('notes.delete');
    Route::get('/{id}/destroy', 'NoteController@destroy')->name('notes.destroy');
    Route::get('{id}/show', 'NoteController@show')->name('notes.show');
    Route::post('/search', 'NoteController@search')->name('notes.search');
});
