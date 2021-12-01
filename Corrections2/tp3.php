<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Titre quelconque</title>
        <style>
            table, tr, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 2px 5px;
            }
        </style>
    </head>
    <body>

        <?php
            echo "<h1>Texte dans une balise heading de niveau 1</h1>"; 
            echo "<b>Texte affiché en gras</b>";
            echo "<h3>Titre de niveau 3</h3>";
            echo "<i><b>Texte en italique et en gras</b></i>";
            echo "<p style=\"color: red;\">Phrase en rouge</p>";







            $max = 10;

            echo "<table>";
                for ( $j = 1; $j <= $max ; $j += 1) {
                    echo "<tr>";
                        for ($i = 1 ; $i <= $max ; $i += 1) {
                            echo "<td>Ligne " . $j . ", Cellule " . $i . "</td>";
                        }
                    echo "</tr>";
                }
            echo "</table>";



            $mon_tableau = [12, 3, 5, 1, 10, 13, 4, 8, 202, 11];

            echo "<table>";
                echo "<tr>";
                foreach ($mon_tableau as $valeur) {
                    echo "<td>" . $valeur . "</td>";
                }
                echo "</tr>";
            echo "</table>";






        ?>

        
        
    </body>
</html>