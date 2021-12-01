<?php

$connexionBdd = mysqli_connect("localhost", "root", "root");

mysqli_set_charset($connexionBdd, "utf8");

$selectionBdd = mysqli_select_db($connexionBdd, "bibliotheque");

$requete = "SELECT livre.id, titre, annee, isbn, resume, nom, prenom, code_pays FROM livre";

$resultat = mysqli_query($connexionBdd, $requete);

while ($ligne_resultat = mysqli_fetch_assoc($resultat))
{
    $titre = $ligne_resultat['titre'];
    $annee = $ligne_resultat['annee'];
    $resume = $ligne_resultat['resume'];
    $nom = $ligne_resultat['nom'];
    $prenom = $ligne_resultat['prenom'];
    $ibn = $ligne_resultat['isbn'];
    
    
}


mysqli_close($connexionBdd);

?>