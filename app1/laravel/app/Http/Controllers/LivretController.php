<?php

namespace App\Http\Controllers;

class LivretController {


    function calcul($nombre){
        $table = [];
        for($i = 1; $i<=12; $i++){
            $table[] = "$nombre x $i = " . ($nombre * $i);
        }

        return view('livret', ['nombre' => $nombre, 'table' =>$table]);
    }

}