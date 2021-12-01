<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8"/>
        <title>Script PHP traitant les valeurs saisies dans le formulaire</title>
        <link rel="stylesheet" href="assets/css/custom.css"/>
    </head>
    <body>
        <h1>Traitement de l'inscription</h1>
        <?php
        $connexionBdd = mysqli_connect("localhost", "root", "root");
        
        mysqli_set_charset($connexionBdd, "utf8");
        
        $selectionBdd = mysqli_select_db($connexionBdd, "bibliotheque");
        
        $requete = "SELECT * FROM `utilisateur`";
        
        $resultat = mysqli_query($connexionBdd, $requete);

        while ($ligne_resultat = mysqli_fetch_assoc($resultat)){
            $nom = $ligne_resultat['nom'];
            $prenom = $ligne_resultat['prenom'];
            $email = $ligne_resultat['email'];
            $password = $ligne_resultat['password'];
        }
        if (empty($_POST['email']) && empty($_POST['password'])) {
            $message = "Erreur : les champs du formulaire sont vides.";
        } elseif (empty($_POST['password'])) {
            $message = "Erreur : le champ 'password' du formulaire est vide.";
        } elseif (empty($_POST['email'])) {
            $message = "Erreur : le champ 'email' du formulaire est vide.";
        }elseif{ 'email' == 
            
        }
        echo $message;







        ?>
        <p class="text-center">
            <a href="CONNEXION3.php" title="Retour au formulaire">Retour au formulaire</a>
        </p>
    </body>
</html>