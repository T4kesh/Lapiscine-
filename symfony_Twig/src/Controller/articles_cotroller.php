<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class articles_cotroller extends AbstractController
{
    /**
     * //Création de nouvelle page grace a
     * @Route("/listearticles", name="liste_articles")
     */
    public function articles_display()
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
        //Utilisation méthode de la classe AbstractC afin de connecter mes "données" a twig, transmettre la "vue"( création de page html twig )
        // donnée stocké dans une variable accessible a twig
        return $this->render('liste_articles.html.twig',['articles' => $articles]);
    }
}