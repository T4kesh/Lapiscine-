<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8"/>
        <title>Script PHP traitant les valeurs saisies dans le formulaire</title>
        <link rel="stylesheet" href="assets/css/custom.css"/>
    </head>
    <body>
        <h1>ON FLEX SUR Pythagore BLBLBLB</h1>
        <?php
            if (empty($_GET['$longueurAB']) && empty($_GET['$longueurAC'])) {
                $message = "Erreur : les champs du formulaire sont vides.";
            } elseif (empty($_GET['$longueurAB'])) {
                $message = "Erreur : le champ 'nom' du formulaire est vide.";
            } elseif (empty($_GET['$longueurAC'])) {
                $message = "Erreur : le champ 'prenom' du formulaire est vide.";
            } else {

                $longueurAB = "";
                $longueurAC = "";
                $longueurAB = $_GET['$longueurAB'];
                $longueurAC = $_GET['$longueurAC']; 
                    
                $longueurBCCarre = ($longueurAB * $longueurAB) + ($longueurAC * $longueurAC);
                $longueurBC = sqrt($longueurBCCarre);
    
                    $message = "la valeur bc est " . $longueurBC;
                    
            }
            echo $message;
        ?>
        <p class="text-center">
            <a href="inscription_form.php" title="Retour au formulaire">Retour au formulaire</a>
        </p>
    </body>
</html>