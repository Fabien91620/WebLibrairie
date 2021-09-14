<?php

include('../Fonctions.php');

$link = connectDB();
$id = $_POST["id"];

try {

    $req3 = "DELETE FROM GENRE_LIVRE WHERE ID_GENRE='$id'";
    $res3 = $link->prepare($req3);
    $row3 = $res3->execute();

    $req4 = "DELETE FROM GENRE WHERE ID='$id'";
    $res4 = $link->prepare($req4);
    $row4 = $res4->execute();

    echo $req4;

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}
