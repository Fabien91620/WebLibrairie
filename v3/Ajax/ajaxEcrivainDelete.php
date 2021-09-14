<?php

include('../Fonctions.php');

$link = connectDB();
$id = $_POST["id"];

try {

    $req4 = "DELETE FROM ECRIVAIN WHERE ID='$id'";
    $res4 = $link->prepare($req4);
    $row4 = $res4->execute();

    echo $req4;

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}
