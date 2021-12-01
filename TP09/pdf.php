<?php
require 'FPDF/fpdf.php';
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->SetFont('Arial','B',16);



$connexionBdd = mysqli_connect("localhost", "root", "root");
mysqli_set_charset($connexionBdd, "utf8");
$selectionBdd = mysqli_select_db($connexionBdd, "bibliotheque");

$requete = "SELECT livre.id, titre, annee, isbn, resume, illustration_id FROM livre";
$resultat = mysqli_query($connexionBdd, $requete);

while ($ligne_resultat = mysqli_fetch_assoc($resultat))
{

    $titre = $ligne_resultat['titre'];
    $annee = $ligne_resultat['annee'];
    $isbn = $ligne_resultat['isbn'];
    $resume = $ligne_resultat['resume'];
    $illustration_id = $ligne_resultat['illustration_id'];

    $pdf->AddPage('P','A4','0');
    $pdf->Cell(190,10,utf8_decode($titre),0,0,'C');


}
$pdf->Output();
mysqli_close($connexionBdd);



