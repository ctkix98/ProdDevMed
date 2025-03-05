<?php

use App\Http\Controllers\MonPremierControleur;
use Illuminate\Support\Facades\Route;

Route::get('/', [MonPremierControleur::class, 'maMethodeDansControleur']);


// Route ::get('article/{n}/couleur/{c}', function($n, $c){
//     return view('maVue')->with('numero', $n)->with('couleur', $c);
//     })->where(['n' => '[0-9]+', 'c' => 'rouge|vert|bleu']);

Route::get(
    'article/{n}/couleur/{c}',
    [MonPremierControleur::class, 'test']
)->where(['n' => '[0-9]+', 'c' =>
'rouge|vert|bleu']);

Route::get('afficheTab', [MonPremierControleur::class, 'afficheTab']);

Route::get('artistes/{lettre}', [MonPremierControleur::class, 'afficheTabLettre']);

//Route::get('afficherImage', [MonPremierControleur::class, 'afficherImage']);
