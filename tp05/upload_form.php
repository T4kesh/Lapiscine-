<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Envoi de fichier via formulaire</title>
    <link rel="stylesheet" href="assets/css/custom.css"/>
</head>
<body>
<h1>Formulaire d'envoi de fichier</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <div>
        <label id="lbl_fichier" for="fichier">Fichier</label>
        <input id="fichier" name="fichier" type="file" />
    </div>

    <div>
        <input id="upload" type="submit" value="Upload"/>
    </div>
</form>
</body>
</html>