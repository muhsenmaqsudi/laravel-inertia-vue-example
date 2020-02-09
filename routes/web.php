<?php

use Inertia\Inertia;

Route::get('/', function () {
//    return view('app');
    return Inertia::render('Welcome', [
        'foo' => 'bar'
    ]);
});
