<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Form3Controller;

Route::get('/', function () {
    return view('welcome');
});

//<!-- routes/web.php -->
//Route::get('afficheFormulaire', [FormController::class,'afficheForm']);

//Route::post('traiteFormulaire', [FormController::class,'traiteForm']);

// Route::get('form3', function () {
//     return view('view_form3');
// });

Route::get('form3', [Form3Controller::class,'afficheForm']);
Route::post('traiteFormulaire', [Form3Controller::class,'traiteForm3']);
