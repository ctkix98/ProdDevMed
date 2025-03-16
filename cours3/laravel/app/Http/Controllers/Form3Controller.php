<?php

namespace App\Http\Controllers;

use Date;
use DateTime;
use ErrorException;
use Illuminate\Http\Request;

class Form3Controller extends Controller
{
    public function afficheForm()
    {
        return view('view_form3');
    }
    // L'objet $request contiendra les données du formulaire.
    public function traiteForm3(Request $request)
    {
        $data = [
            'names' => $request->input('name', []),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'mid' => $request->input('mid'),
        ];

        return $this->processData($data);

        //dd($request); // pour observer le contenu de $request
        //return view('view_exo3', ['nom' => $names, 'debut' => $startTime, 'fin' => $endTime, 'entrevue' => $midTime]);
    }

    public function processData($data)
    {
        shuffle($data['names']);
        $nombrePersonne = count($data['names']);


        $startTime = new DateTime($data['start']);
        $endTime = new DateTime($data['end']);
        $midTime = $data['mid'];


        if ($endTime < $startTime) {
            throw new ErrorException("La date de fin est inférieure à la date de début");
        } else {
            // echo ("Tout va bien");
            // echo "<br>";
        }

        //Faire la différence entre end et start
        $diffTime = $endTime->diff($startTime);
        //Récupérer les minutes totales
        $totalMinutes = ($diffTime->h * 60) + ($diffTime->i);

        //Récupérer le break en minutes
        list($hours, $minutes) = explode(':', $midTime);
        $totalMinutesBreak = ($hours * 60) + $minutes;

        // echo ("Temps total" . $totalMinutes);
        // echo "<br>";
        // echo ("Temps total des breaks" . $totalMinutesBreak);
        // echo "<br>";

        $nombreMinutesParUser = $nombrePersonne * $totalMinutesBreak;
        $tempsRestant = $totalMinutes - $nombreMinutesParUser;
        $tempsParUser = $tempsRestant / $nombrePersonne;

        // echo ("Temps par utilisateur" . $tempsParUser);
        // echo "<br>";
        // echo "<br>";

        $startTimeClone = clone $startTime;
        foreach ($data['names'] as $index => $name) {
            // Calculer l'heure de début du participant
            if ($index == 0) {
                $startTimeClone = $startTime;
            }else {
                $startTimeClone->modify("+$tempsParUser minutes");
            }

            // Calculer l'heure de fin du participant (ajouter le temps pour le break)
            $endTimeClone = clone $startTimeClone;
            $endTimeClone->modify("+$tempsParUser minutes");

            $participantTime[] = [
                'name' => $name,
                'start_time' => $startTimeClone->format('H:i'),
                'end_time' => $endTimeClone->format('H:i')
            ];

            // Afficher l'heure de début et de fin pour chaque participant
            // echo "Participant $name commence à : " . $startTimeClone->format('H:i') . "<br>";
            // echo "Participant $name finit à : " . $endTimeClone->format('H:i') . "<br>";

            // Ajouter le temps de pause pour le prochain participant
            $startTimeClone->modify("+$totalMinutesBreak minutes");
        }



        return view('view_exo3')->with('resultat', $participantTime);
    }
}
