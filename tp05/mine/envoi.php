<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8"/>
        <title>Script de traitement du fichier</title>
        <link rel="stylesheet" href="assets/css/custom.css"/>
    </head>
    <body>
        <h1>Upload du fichier</h1>
        <?php
                       if (empty($_POST['titre']) && empty($_POST['fichier'])&& empty($_POST['datea'])) {
                        $message = "Certains champs sont vides";
                    } elseif (empty($_POST['datea'])) {
                        $message = "Veuillez renseigner une date";
                    } elseif (empty($_POST['titre'])) {
                        $message = "Veuillez renseigner un titre";
                    } 
        

                $dossier = 'medias/';

                if(!file_exists($dossier)) {
                    echo 'Le dossier "medias/" n\'existe pas ou n\'est pas disponible en écriture';
                } else {

                    $nom_fichier = $_FILES['fichier']['name'];
                    $fichier = $_FILES['fichier']['tmp_name'];

                    if (move_uploaded_file($fichier, $dossier . $nom_fichier )) {
                        $titre = $_POST['titre'];
                        $datea = $_POST['datea'];
                        $message1 = "Le fichier" . $titre . " a été ajouté le". $datea ;
                        echo $message ; ;
                    } else {
                        echo "Erreur lors de l'upload du fichier";
                    }
                }
         
        

        ?>
        <p class="text-center">
            <a href="tp05.php" title="Retour au formulaire">Retour au formulaire</a>
        </p>
    </body>
</html>
