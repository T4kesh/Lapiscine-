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
            if (isset($_FILES['fichier'])) {

                $dossier = 'medias/';

                if(!file_exists($dossier)) {
                    echo 'Le dossier "medias/" n\'existe pas ou n\'est pas disponible en écriture';
                } else {

                    $nom_fichier = $_FILES['fichier']['name'];
                    $fichier = $_FILES['fichier']['tmp_name'];

                    if (move_uploaded_file($fichier, $dossier . $nom_fichier )) {
                        echo "Le fichier " . $nom_fichier . " a bien été uploadé"; 
                    } else {
                        echo "Erreur lors de l'upload du fichier";
                    }
                    
                }
            }           
        
        ?>
        <p class="text-center">
            <a href="upload_form.php" title="Retour au formulaire">Retour au formulaire</a>
        </p>
    </body>
</html>


            //tmp seulement pour les fichiers//