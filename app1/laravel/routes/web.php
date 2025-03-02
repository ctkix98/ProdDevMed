<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivretController;
use App\Http\Controllers\CffControler;


//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('hello');
//});

Route::get('/livret/{nombre}', [LivretController::class, 'calcul'])
    ->where('nombre', '[2-9]|1[0-2]'); // Limite de 2 à 12 pour la table

//Route::get('/page1', function(){
//    return view('samePage');
//});

//Route::get('Page1', function(){
//    return view('samePage');
//});

Route::get('/{page1}', function(){
    return view('samePage');
})->where('page1', '^[pP]age1$');

Route::get('/cff/{depart}/{heure}/{arrivee}', [CffControler::class, 'redirect']);


Route::get('{n}', function($n) {
    return "page $n";
    })->where('n', '[1-3]');