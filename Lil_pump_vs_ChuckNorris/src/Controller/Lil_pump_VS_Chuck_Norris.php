<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



//ajout de la classe abstract controller a ma class via héritage
// ma classe a donc accès au méthode de la classe hérité
class Lil_pump_VS_Chuck_Norris extends AbstractController
{
    /**
     * On crée la nouvelle page grace a la route
     * @Route("/", name="home")
     * j attribut un name a ma route url 'home'
     */
    public function home()
    {
        var_dump('Chuck est INVINCIBLE, IMMORTEL, VENEREZ LE'); die;
    }


    /**
     * @Route("/contact")
     */
    public function contact()
    {
        var_dump('Lorsque Graham Bell inventa le téléphone il avait un appell manqué de Chuck Norris'); die;
    }

    /**
     * @Route("/articles")
     */
    public  function article()
    {
        var_dump('A 18 ans lorsque chuck quitta la maison il dit as son père, tu es l homme de la maison maintenant'); die;
    }

    /**
     * @Route("/digimon", name="digimon")
     * assignation d un nom ( id ) a ma route url
     */
    public function digimon()
    {
        var_dump('gg wp');die;
    }


    /**
     * @Route("/joker")
     * création de la nouvelle pas avec route comme d'hab
     */
    public function age_restriction()
    {
        // J accede a la class "response" en allant chercher dans la library symfony le composant nécéssaire a son
        // initialisation ( use Symfony\Component\HttpFoundation\Response;)
        //je crée un nouvel objet en utilisant la classe "response" que je laisse vide, sans parametres
        // tout en le stockant dans la variable $reponse

        $reponse = new Response();
        //initialisation de l'objet RedirectResponse
        $response =  new RedirectResponse('http://localhost/Lil_pump_vs_ChuckNorris/public/digimon');

          //Je vais "chercher" dans le "repertoire/library" de symfony le composant nécéssaire grace a use tout en haut,
          //je récupère ma méthode createFromGlobals(); de la classe $request
          // de symfony que je stock dans la variable $request

        $request = Request::createFromGlobals();
        //Je cible et récupere la donnée m'intéressant dans l'url
        // ici l'age que je stock ensuite dans une variable afin de pouvoir l'utiliser

        $age = $request->query->get('age');

        // initialisation de mes ou ma condition grace a if else if tu connais
        if (!$age)
        {
            //dump('Renseigne ton age on est pas dans le bails sombre ici');
            //je dois envoyer une réponse (http) ,du composant HttpFondation ( tout en haut)

            //je remplace les dump de noobi par ma varianle reponse afin que la requete est une réponse
            //on peut donc de plus retirer le ;die; , c est pas cool de mourir
            //jutilise ici une méthode de la classe Response me permettant de change le contenu de mon objet

            $reponse->setContent('Renseigne ton age on est pas dans le bails sombre ici');
            return $reponse;

        }elseif($age<18){

            //utilisation de la méthode de la classe hérité redirectToroute
            //en donnant pour cible de redirection l id ( nom ) de ma route url modifié ci dessus
            return $this->redirectToRoute('digimon');

        }elseif($age == 18){

            //dump('Pile poil l age requis c est carré');

            //we do it again
            $reponse->setContent('Pile poil l age requis c est carré');

            return $reponse;
        }elseif($age>= 70){

           //dump('c est un night club ici pas une maison de retraite');

            // hop
            $reponse->setContent('c est un night club ici pas une maison de retraite');

            return $reponse;

        }else{
           //dump('Mets toi bien frelon c est leger');
            //on peut enlever le die, symfony a donc la reponse a sa requete, revoir le schema cycle de vie http ( important!!)

            $reponse->setContent('Met toi bien frelon c/est leger');
            
            return $reponse;


        }


    }
}






