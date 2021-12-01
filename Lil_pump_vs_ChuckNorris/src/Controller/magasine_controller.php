<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class magasine_controller extends AbstractController
//je fais heriter a ma classe la classe Abstract controller afin d'avoir accès a ses méthodes
{
    /**
     * je crée un url contenant une partie variable = wild card
     * ne pas oublier d'aller chercher le composants dans la librairie symfo
     * @Route("/magasine/{value}")
     */
    //je crée donc ma public function en lui ajoutant donc comme parametre
    // la wild card ici je la nomme value

    public function Magazine_wildcard($value)
    {

        $articles = [
            "article 1",
            "article 2",
            "article 3",
            "article 4",
            "article 5",
            "article 6"
        ];



        //initialisation de la condition demandé grace a la fonction php array_key_exist
        // si la clé demané existe dans le tableau voici le comportement
        // si celle ci n'existe pas on rentre dans le sinon 'else'
        if (array_key_exists( $value, $articles))
        {
            //je stock dans une variable la clé du tableau qui sera solicité en fonction de la wild card de mon url
            //j'ai du déplacer la variable dans ma condition ( en attente de réponse)
            $LesMagasine = $articles[$value];

            //instaciation d'un objet de classe réponse
            // ! chercher le composant dans la librairie symfo ( le use tout en haut ) !
            // en lui donnant pour parametre l'article récupré du tableau
            $reponse = new Response($LesMagasine);

            // je retourne ma réponse http ( important!) -> cycle de vie ( le schema tu connais)
            return $reponse;
        }else{

            //si la clé demandé n'existe pas je redirige grace a la méthode hérité de la classe
            //abstract controller sur ma page home grace au nom (identifiant ) de la route assigné a l'url de cell-ci
            return $this->redirectToRoute('home');

        }









    }

}