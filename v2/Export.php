<?php
include_once('Fonctions.php');
$link = mysqli_connect("localhost", "root", "root", "WeblibrairieVVA");
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Livre.csv');
$output = fopen("php://output", "w");
fputcsv($output, array('EDITEUR', 'GENRE', 'ISBN', 'RESUME', 'IMAGE', 'TITRE', 'LIBELLE', 'DT_PARUTION', 'PRIX_UNITAIRE', 'NOM', 'PRENOM', 'IDECRIVAIN', 'IDGENRE'));
$req ="SELECT LIVRE.EDITEUR, GENRE.LIBELLE, LIVRE.ISBN, LIVRE.RESUME, LIVRE.IMAGE, LIVRE.TITRE, LIVRE.DT_PARUTION, LIVRE.PRIX_UNITAIRE, ECRIVAIN.NOM, ECRIVAIN.PRENOM, ECRIVAIN.ID as ecrivainid, GENRE.ID as genreid FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN GENRE ON LIVRE.ID_GENRE = GENRE.ID";
$result = mysqli_query($link, $req);
while ($row = mysqli_fetch_assoc($result)){
    fputcsv($output, $row);
}
fclose($output);
?>