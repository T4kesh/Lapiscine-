<?php
    session_start();

    if (empty($_SESSION['nom'])) {
        header('Location: connexion_form.php');
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <style>
            .row:nth-of-type(2n) {
                flex-direction: row-reverse;
            }
        </style>

        <title>Ma bibliothèque</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center mt-3 mb-4">Ma bibliothèque</h1>

            <p>Connecté en tant que <strong><?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?></strong><p>
            <p><a href="connexion_form.php?logout=true">Déconnexion</a></p>
            <p><a href="../TP09/pdf.php">Imprimer</a></p>

            <form action="" class="col-4" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="search" placeholder="Titre / auteur" aria-label="Rechercher" aria-describedby="button-addon1">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon1">Rechercher</button>
                </div>
            </form>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="biblio.php">Tous</a></li>

                    <?php
                        $connexionBdd = mysqli_connect("localhost", "root", "root");
                        mysqli_set_charset($connexionBdd, "utf8");
                        $selectionBdd = mysqli_select_db($connexionBdd, "bibliotheque");

                        $requete = "SELECT id, libelle FROM genre ORDER BY libelle";

                        $resultat = mysqli_query($connexionBdd, $requete);

                        while ($ligne_resultat = mysqli_fetch_assoc($resultat))
                        {
                            $libelle = $ligne_resultat['libelle'];
                            $id = $ligne_resultat['id'];

                            echo '<li class="breadcrumb-item"><a href="biblio.php?genre='.$id.'">'.$libelle.'</a></li>';
                        }
                        mysqli_close($connexionBdd);
                    ?>
                
                </ol>
            </nav>
        

            <?php

                /* 
                if (!empty($_GET['search'])) {
                    $search = $_GET['search'];
                } else {
                    $search = '';
                }
                ou en opérateur ternaire : */
                $search = !empty($_GET['search']) ? $_GET['search'] : '';
                // $variable = (condition) ? (valeur si vrai) : (valeur si faux);
                $genre = !empty($_GET['genre']) ? $_GET['genre'] : null;

                $connexionBdd = mysqli_connect("localhost", "root", "root");
                mysqli_set_charset($connexionBdd, "utf8");
                $selectionBdd = mysqli_select_db($connexionBdd, "bibliotheque");

                $requete = "SELECT livre.id, titre, annee, isbn, libelle, resume, auteur.nom AS auteurNom, auteur.prenom AS auteurPrenom, lecteur.nom AS lecteurNom, lecteur.prenom AS lecteurPrenom, code_pays, illustration_id, date_emprunt, DATEDIFF(NOW(), date_emprunt) as nbJoursEmprunt FROM livre INNER JOIN auteur ON livre.auteur_id = auteur.id INNER JOIN pays ON auteur.pays_id = pays.id INNER JOIN genre ON livre.genre_id = genre.id LEFT JOIN lecteur ON lecteur.id = livre.lecteur_id WHERE (titre LIKE '%".$search."%' OR auteur.nom LIKE '%".$search."%' OR auteur.prenom LIKE '%".$search."%')";
                
                // on ajoute le filtre par genre_id uniquement si on a un genre de sélectionné = en paramètre GET dans l'url
                if ($genre != null) {
                    $requete .= " AND genre_id = " . $genre;
                }

                $resultat = mysqli_query($connexionBdd, $requete);

                while ($ligne_resultat = mysqli_fetch_assoc($resultat))
                {
                    $id = $ligne_resultat['id'];
                    $titre = $ligne_resultat['titre'];
                    $annee = $ligne_resultat['annee'];
                    $isbn = $ligne_resultat['isbn'];
                    $libelle = $ligne_resultat['libelle'];
                    $resume = $ligne_resultat['resume'];
                    $auteurNom = $ligne_resultat['auteurNom'];
                    $auteurPrenom = $ligne_resultat['auteurPrenom'];
                    $lecteurNom = $ligne_resultat['lecteurNom'];
                    $lecteurPrenom = $ligne_resultat['lecteurPrenom'];
                    $code_pays = $ligne_resultat['code_pays'];
                    $illustration_id = $ligne_resultat['illustration_id'];
                    $date_emprunt = $ligne_resultat['date_emprunt'];
                    $nbJoursEmprunt = $ligne_resultat['nbJoursEmprunt'];
            
                    // on ferme les balises PHP pour saisir du HTML pur, mais on est TOUJOURS dans la boucle while
            ?>

                <div class="row my-5">
                    <div class="col-3 text-center">
                        <img class="img-fluid" src="couvertures/<?=$illustration_id?>.jpg" alt="<?=$titre?>" />
                    </div>
                    <div class="col-9">
                        <h2><?=$titre?></h2>
                        <!-- même chose que <h2>< ?php echo $titre; ?></h2>-->
                        <p>écrit par <?=$auteurPrenom?> <?=$auteurNom?> <img src="https://flagcdn.com/<?=strtolower($code_pays)?>.svg" width="30">  en <?=$annee?></p>
                        <p>(ISBN : <strong><?=$isbn?></strong>) - <em><?=$libelle?></em></p>
                        <p><?=$resume?></p>
                        
                        <?php 
                            // si date emprunt pas nulle, alors c'est emprunté par quelqu'un : on affiche le nom/prénom
                            if ($date_emprunt !== null) {
                                echo '<p class="text-danger">Emprunté par ' . $lecteurPrenom . ' ' . $lecteurNom . ' depuis ' . $nbJoursEmprunt . ' jours</p>';
                            } else {
                                echo '<p class="text-success">Disponible</p>';
                            }
                        ?>
                        
                    </div>
                </div>

            <?php
                // on réouvre PHP pour mettre l'accolade de fin de boucle
                }
                mysqli_close($connexionBdd);
            ?>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
