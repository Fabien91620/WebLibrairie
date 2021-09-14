<?php

include('../Fonctions.php');

$link = connectDB();
$id = $_POST["id"];
$genre = $_POST["genre"];

try {
    $req = "UPDATE GENRE
        SET LIBELLE = '$genre'
        WHERE id='$id'";
    $res = $link->prepare($req);
    $row = $res->execute();

    echo 'Mise à jour effectuer !';

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}