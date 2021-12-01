<?php

namespace App\Controller;

use  Symfony\Component\Routing\Annotation\Route;


class Inscription_page
{

    /**
     * @Route("/")
     */
    function inscription()
    {

        var_dump('coucou'); die;

    }

    /**
     * @Route("/contact")
     */
    public function contact()
    {
        var_dump('yo bro'); die;
    }

    /**
     * je crée une nouvelle pasge grace a "route"
     * ( ceci est une annotation pas un commentaire car php executra le script dedans
     * étant donnée qu'il est placé au dessi de ma méthode ( pas requete )
     * il sera effectif des que je requesterais l'url "/chuck"
     * ne pas se faire bait il faut d'abord aller dans public sinon apres on galere et on croit que ça marche pas
     * sigh
     * @Route("/chuck")
     */
    public function swag_lord()
    {
        var_dump('lil pump vs chuck Norris qui gagne?'); die;
    }

}



