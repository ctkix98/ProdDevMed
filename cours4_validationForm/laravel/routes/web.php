<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('afficheFormulaire', [FormController::class,'afficheForm']);
Route::post('traiteFormulaire', [FormController::class,'traiteForm']);
