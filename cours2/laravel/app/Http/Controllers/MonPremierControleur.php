<?php

namespace App\Http\Controllers;

use DateTime;

use Illuminate\Http\Request;

class MonPremierControleur extends Controller
{
    public function maMethodeDansControleur()
    {
        return "YES";
    }

    public function test($n, $c)
    {
        return $n . " : " . $c;
    }

    public function afficheTab()
    {
        $artistes = array(
            array(
                "nom" => "Amy",
                "prenom" => "Winehouse",
                "dateNaissance" => new DateTime('14-09-1983')
            ),
            array(
                "nom" => "Janis",
                "prenom" => "Joplin",
                "dateNaissance" => new DateTime('19-01-1943')
            ),
            array(
                "nom" => "Jo",
                "prenom" => "Bar",
                "dateNaissance" => new DateTime('19-01-1943')
            ),
            array(
                "nom" => "Janis",
                "prenom" => "Siegel",
                "dateNaissance" => new DateTime('12-01-1990')
            ),
        );
        return view('maVue2')->with('artistes', $artistes);
    }


    public function afficherImage()
    {
        return view('vueImage');
    }

    public function afficheTabLettre($lettre)
    {
        $artistesFiltres = [];
        $artistes = array(
            array(
                "nom" => "Amy",
                "prenom" => "Winehouse",
                "dateNaissance" => new DateTime('1983-09-14') // Format correct YYYY-MM-DD
            ),
            array(
                "nom" => "Janis",
                "prenom" => "Joplin",
                "dateNaissance" => new DateTime('1943-01-19')
            ),
            array(
                "nom" => "Jo",
                "prenom" => "Bar",
                "dateNaissance" => new DateTime('1943-01-19')
            ),
            array(
                "nom" => "Janis",
                "prenom" => "Siegel",
                "dateNaissance" => new DateTime('1990-01-12')
            ),
        );
        foreach ($artistes as $artiste) {
            $nom = $artiste['nom'];
            $firstCharacters = substr($nom, 0, 1);
            if (strtolower($firstCharacters) === $lettre) {
                $artistesFiltres[] = $artiste;
            }
        }


        return view('maVue2')->with('artistes', $artistesFiltres);
    }

    public function proverbe(){
        $proverbes = ["Ses déclarations à l'emporte-pièce", "Un job d'enculeur de mouche", "Au cul la balayette", "Nique ta mère", "Il est fini à la pisse", "Espèce de fourchette à soupe"];

        $random = rand(0, count($proverbes)-1);

        return view('proverbe') ->with('proverbe', $proverbes[$random]);
    }
}
