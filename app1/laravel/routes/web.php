<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('{n}', function($n) {
    return "page $n";
    })->where('n', '[1-3]');