<?php

include('../Fonctions.php');

$link = connectDB();
$idLigne = $_POST['ligne'];

try {
    $req = "INSERT INTO LIVRE(ID) VALUES ('$idLigne')";
    $res = $link->prepare($req);
    $row = $res->execute();

    $sql1 = $link->query("SELECT MAX(id) as id FROM LIVRE");
    $result = $sql1->fetch();
    echo $result[0];

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}