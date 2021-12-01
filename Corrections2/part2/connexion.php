<?php

    session_start();

    if (empty($_POST['email']) && empty($_POST['password'])) {
        $message = "all";
    } elseif (empty($_POST['email'])) {
        $message = "email";
    } elseif (empty($_POST['password'])) {
        $message = "password";
    } else {

        $connexionBdd = mysqli_connect("localhost", "root", "root");
        mysqli_set_charset($connexionBdd, "utf8");
        $selectionBdd = mysqli_select_db($connexionBdd, "bibliotheque");

        $requete = "SELECT nom, prenom FROM utilisateur WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."' LIMIT 1";

        $resultat = mysqli_query($connexionBdd, $requete);

        $ligne_resultat = mysqli_fetch_assoc($resultat);

        if ($ligne_resultat == null) {
            $message = "unknown";
        } else {
            $_SESSION['nom'] = $ligne_resultat['nom'];
            $_SESSION['prenom'] = $ligne_resultat['prenom'];
            $_SESSION['connected'] = true;

            // redirection vers une page
            header('Location: biblio.php');
            exit();
        }

        mysqli_close($connexionBdd);
    
    }

    header('Location: connexion_form.php?error='.$message);
    exit();

?>