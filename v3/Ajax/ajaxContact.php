<?php

include('../Fonctions.php');

$link = connectDB();
$prenom = $_POST["prenom"];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

try {

    $req = "INSERT INTO CONTACT(PRENOM, NOM, MAIL, SUJET, MESSAGE) VALUES ('$prenom', '$nom', '$mail', '$sujet', '$message')";
    $res = $link->prepare($req);
    $row = $res->execute();

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}