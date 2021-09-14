<?php

include('../Fonctions.php');

$link = connectDB();
$id = $_POST["id"];
$mdp = htmlspecialchars($_POST["mdp"], ENT_QUOTES);
$type = $_POST["type"];
$nom = htmlspecialchars($_POST["nom"], ENT_QUOTES);
$prenom = htmlspecialchars($_POST["prenom"], ENT_QUOTES);
$dateInscrip = htmlspecialchars($_POST["dtinscrip"], ENT_QUOTES);
$dateFerm = htmlspecialchars($_POST["dtferm"], ENT_QUOTES);
$mail = htmlspecialchars($_POST["mail"], ENT_QUOTES);
$fixe = htmlspecialchars($_POST["fixe"], ENT_QUOTES);
$tel = htmlspecialchars($_POST["tel"], ENT_QUOTES);

try {
    $req = "UPDATE COMPTE
        SET MDP ='$mdp',
            TYPECOMPTE ='$type',
            NOMCPTE='$nom',
            PRENOMCPTE='$prenom',
            DATEINSCRIP='$dateInscrip',
            DATEFERME='$dateFerm',
            ADRMAILCPTE='$mail',
            NOTELCPTE='$fixe',
            NOPORTCPTE='$tel'
        WHERE COMPTE.USER='$id'";
    $res = $link->prepare($req);
    $row = $res->execute();

    echo 'Mise à jour effectuer !';

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}