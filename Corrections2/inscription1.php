<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Formulaire permettant de saisir des valeurs</title>
    <link rel="stylesheet" href="assets/css/custom.css"/>
</head>
<body>
<h1>Exercice swag Pythagore</h1>

<form action="pythagore.php" method="get">
    <div>
        <label id="lbl_nom" for="nom">Valeur AB</label>
        <input id="nom" name="$longueurAB" type="number"/>
    </div>
    <div>
        <label id="lbl_prenom" for="prenom">Valeur BC</label>
        <input id="prenom" name="$longueurAC" type="number"/>
    </div>

    <div>
        <input id="inscrire" type="submit" value="S'inscrire"/>
    </div>
</form>
</body>
</html>







