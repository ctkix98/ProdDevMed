<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail; // Import de la classe Mail

class FormController extends Controller
{
    public function afficheForm()
    {
        return view('view_form');
    }

    public function traiteForm(ContactRequest $request)
    {
        $data = [
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'lieu' => $request->input('lieu'),
        ];

        Mail::send(
            'view_email',
            $data,
            function ($message) {
                $message->to('admin@example.com')
                    ->subject('Nouvelle manifestation');
            }
        );
        return view('view_resultat')->with('requete', $request);
    }
}
