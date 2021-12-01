<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8"/>
        <title>Script PHP traitant les valeurs saisies dans le formulaire</title>
        <link rel="stylesheet" href="assets/css/custom.css"/>
    </head>
    <body>
        <h1>Traitement de l'inscription (exemple)</h1>
        <?php
            if (empty($_GET['$longueurAB']) && empty($_GET['$longueurAC'])) {
                $message = "Erreur : les champs du formulaire sont vides.";
            } elseif (empty($_GET['$longueurAB'])) {
                $message = "Erreur : le champ 'nom' du formulaire est vide.";
            } elseif (empty($_GET['$longueurAC'])) {
                $message = "Erreur : le champ 'prenom' du formulaire est vide.";
            } else {
                $nom = $_GET['$longueurAB'];
                $prenom = $_GET['$longueurAC'];
                $message = "Bonjour " . $longueurAC . " " . $longueurAB;
            }
            echo $message;
            $longueurAB = "";
            $longueurAC = "";
            function pythagore($longueurAB, $longueurAC){
                $longueurBCCarre = ($longueurAB * $longueurAB) + ($longueurAC * $longueurAC);
                $longueurBC = sqrt($longueurBCCarre);

                return "La longueur BC vaut : " . $longueurBC;
            }

            echo $longueurBC;


        ?>
        <p class="text-center">
            <a href="inscription1.php" title="Retour au formulaire">Retour au formulaire</a>
        </p>
    </body>
</html>