<?php

namespace App\Controller;

use phpDocumentor\Reflection\DocBlock\Tags\Throws;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//initialisation du composant me permettant d'acceder a la classe NotFoundHttpException

//ma classe hérite de AbstractC pour acceder au méthode
class home_controller extends AbstractController

{


    /**
     * Route url classique
     * //création de route
     * initiation de la while card ( route avec partie de l'url variable)
     * @Route("/articles/{id}", name="articles")
     */
        public function chemin($id)
    {

        $articles = [
            1 => [
                "title" => "Le PHP c'est vraiment trop génial",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://i.pinimg.com/originals/7c/bc/27/7cbc277273a71c05eba7bf295f36b206.gif",
                "isPublished" => false,
                "id" => 1
            ],
            2 => [
                "title" => "La vie c'est pas cool",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://static1.purepeople.com/articles/7/26/58/37/@/3758746-exclusif-christian-clavier-enregistr-624x600-2.jpg",
                "isPublished" => true,
                "id" => 2
            ],
            3 => [
                "title" => "Le PHP c'est vraiment trop génial 3",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://cdn.radiofrance.fr/s3/cruiser-production/2019/12/bab9230b-f093-49de-8154-feeebf644c55/838_meme.jpg",
                "isPublished" => true,
                "id" => 3
            ],
            4 => [
                "title" => "Le PHP c'est vraiment trop génial 4",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://freelanceinfos.fr/wp-content/uploads/2021/04/meme-drole-.jpg",
                "isPublished" => false,
                "id" => 4
            ],
            5 => [
                "title" => "Le PHP c'est vraiment trop génial 5",
                "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta et, facilis laboriosam tenetur unde vero! Ad consequatur, debitis dolorum eos error explicabo id, iusto magni nam odio quas reprehenderit ut.",
                "image" => "https://freelanceinfos.fr/wp-content/uploads/2021/04/meilleure-memes-francais.jpg",
                "isPublished" => true,
                "id" => 5
            ]
        ];
            /*
             * condition me permettant de verifier si la clé demandé existe dans le tableau
             * grace a la fonction array_key_exists
             */
        if (!array_key_exists($id, $articles))
        {
            /*
             * je crée un objet de la classe NotFoundHttpException afin d'afficher une erreur lorsque l'id demandé n'existe pas
             */
            throw new NotFoundHttpException("Page_not_found");
        }

        //je profite du parametre de la méthode render me permettant de stocker une variable afinn nqu'elle soit accessible a Twig
        //grace au paramètre de la méthode render je stock mon tableau dans une variable accessible a Twig
        $reponse = $this->render('article.html.twig', [ 'article' => $articles[$id]]);
        return $reponse;

    }


}

