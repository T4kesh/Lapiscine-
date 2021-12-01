<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Envoi de fichier via formulaire</title>
    <link rel="stylesheet" href="assets/css/custom.css"/>
</head>
<body>
<h1>Formulaire d'envoi de fichier</h1>

<form action="envoi.php" method="post" enctype="multipart/form-data">
       <div>
            <label for="Titre">Titre</label>
            <input name="titre" type="text">
       </div>
       <div>
           <label id="lbl_fichier" for="fichier">Fichier</label>
           <input id="fichier" name="fichier" type="file" />
       </div>       
       <div>
       <label for="start">Date d'ajout</label>
            <input type="date" id="datea" name="datea"value="2021-11-04  min="2018-01-01" max="2888-12-31">
       </div>
        <div>
           <input id="upload" type="submit" value="Upload"/>
       </div>
</form>
</body>
</html>
