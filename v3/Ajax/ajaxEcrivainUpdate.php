<?php

include('../Fonctions.php');

$link = connectDB();
$id = $_POST["id"];
$nom = htmlspecialchars($_POST["nom"], ENT_QUOTES);
$prenom = htmlspecialchars($_POST["prenom"], ENT_QUOTES);
$date = htmlspecialchars($_POST["date"], ENT_QUOTES);

try {
    $req = "UPDATE ECRIVAIN
        SET NOM='$nom',
            PRENOM='$prenom',
            DT_NAISS='$date'
        WHERE id='$id'";
    $res = $link->prepare($req);
    $row = $res->execute();

    echo 'Mise à jour effectuer !';

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}