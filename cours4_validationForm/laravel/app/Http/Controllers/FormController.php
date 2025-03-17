<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class FormController extends Controller
{
    public function afficheForm()
    {
        return view('view_form');
    }

    public function traiteForm(ContactRequest $request)
    {
        //echo $request;
        //dd($request); // pour observer le contenu de $request
        return view('view_resultat')->with('requete', $request);    
    }
}
