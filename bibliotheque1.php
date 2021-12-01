<?php
/* (1) Connexion au serveur MySQL (les "???" sont à compléter) 
* Paramètre(s) de la fonction : nom/adresse du serveur,
* identifiant, mot de passe
*/
$connexionBdd = mysqli_connect("localhost", "root", "root");

/* Optionnel : permet d'éviter les problèmes d'affichage de
 * certains caractères accentués
 */
mysqli_set_charset($connexionBdd, "utf8");

/* (2) Sélection de la base (le "???" est à compléter)
* Paramètre(s) de la fonction : nom de la base, connexion */
$selectionBdd = mysqli_select_db($connexionBdd, "bibliotheque");

/* Création d'une requête MySQL sous la forme d'une chaîne de
 * caractères PHP
 */
$requete = "SELECT titre, annee, resume FROM livre";

/* (3) Envoi de la requête de puis le script actuel vers la base 
* de données, et récupération du résultat de la requête
*/
$resultat = mysqli_query($connexionBdd, $requete);

/* (4) Traitement et affichage du/des résultat(s) */ 
while ($ligne_resultat = mysqli_fetch_assoc($resultat))
{
    $titre = $ligne_resultat['titre'];
    $annee = $ligne_resultat['annee'];
    $resume = $ligne_resultat['resume'];
    
    echo "<h2>$titre</h2> publié en <em>$annee</em><br/>";
    echo "<p>$resume</p>";
}

/* (5) Fermeture de la connexion au serveur MySQL */
mysqli_close($connexionBdd);



?>