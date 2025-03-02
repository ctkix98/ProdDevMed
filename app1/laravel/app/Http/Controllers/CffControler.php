<?php

namespace App\Http\Controllers;

class CffControler{

    function redirect($depart, $heure, $arrivee){
        $dateDuJour = date("d.m.Y");
                // Créer l'URL avec les paramètres dynamiques
                $url = "https://www.sbb.ch/fr/acheter/pages/fahrplan/fahrplan.xhtml?" .
                "von=" . urlencode($depart) .
                "&nach=" . urlencode($arrivee) .
                "&datum=" . $dateDuJour .
                "&zeit=" . urlencode($heure) .
                "&suche=true";
    
            // Rediriger l'utilisateur vers cette URL
            return redirect()->to($url);
    }
}