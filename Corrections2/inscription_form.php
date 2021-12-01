<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Formulaire permettant de saisir des valeurs</title>
    <link rel="stylesheet" href="assets/css/custom.css"/>
</head>
<body>
<h1>Formulaire d'inscription (exemple)</h1>

<form action="inscription.php" method="get">
    <div>
        <label id="lbl_nom" for="nom">Nom</label>
        <input id="nom" name="nom" type="text"/>
    </div>
    <div>
        <label id="lbl_prenom" for="prenom">Prénom</label>
        <input id="prenom" name="prenom" type="text"/>
    </div>

    <div>
        <input id="inscrire" name="inscrire" type="submit" value="S'inscrire"/>
    </div>
</form>
</body>
</html>