<?php

use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'foo' => 'bar'
    ]);
});

Route::get('/about', function () {
    return Inertia::render('About', [
        'foo' => 'bar'
    ]);
});

Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'foo' => 'bar'
    ]);
});


Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/create', 'UsersController@create')->name('users.create');
Route::post('/users', 'UsersController@store')->name('users.store');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
