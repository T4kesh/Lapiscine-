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
            if (empty($_GET['$Time']) ) 
            {
                $message = "Erreur : le champs du formulaire est vides.";
            } else 
            {


                $Time = "";
                if($Time < 3600)
                { 
                    $heures = 0; 
                    
                    if($Time < 60){$minutes = 0;} 
                    else{$minutes = round($Time / 60);} 
                    
                    $secondes = floor($Time % 60); 
                } 
                    else
                { 
                    $heures = round($Time / 3600); 
                    $secondes = round($Time % 3600); 
                    $minutes = floor($secondes / 60); 
                } 
                    
                    $secondes2 = round($secondes % 60); 
                   
                    $TimeFinal = "$heures h $minutes min $secondes2 s"; 
                    return $TimeFinal; 
            } 
                    
            
            echo $TimeFinal;
        ?>
        <p class="text-center">
            <a href="horloge1.php" title="Retour au formulaire">Retour au formulaire</a>
        </p>
    </body>
</html>