<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function afficheForm()
    {
        return view('view_form');
    }
    // L'objet $request contiendra les données du formulaire.
    public function traiteForm(Request $request)
    {
         //dd($request); // pour observer le contenu de $request
         return view('view_resultat')->with('requete', $request);    }
}
