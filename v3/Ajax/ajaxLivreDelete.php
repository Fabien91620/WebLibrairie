<?php

include('../Fonctions.php');

$link = connectDB();
$id = $_POST["id"];

try {

    $req = "DELETE FROM IMAGE_LIVRE WHERE ID_LIVRE='$id'";
    $res = $link->prepare($req);
    $row = $res->execute();

    $req1 = "DELETE FROM GENRE_LIVRE WHERE ID_LIVRE='$id'";
    $res1 = $link->prepare($req1);
    $row1 = $res1->execute();

    $req2 = "DELETE FROM LIGNE_PANIER WHERE ID_LIVRE='$id'";
    $res2 = $link->prepare($req2);
    $row2 = $res2->execute();

    $req3 = "DELETE FROM LIGNE_WISHLIST WHERE ID_LIVRE='$id'";
    $res3 = $link->prepare($req3);
    $row3 = $res3->execute();

    $req4 = "DELETE FROM LIVRE WHERE ID='$id'";
    $res4 = $link->prepare($req4);
    $row4 = $res4->execute();

    echo $req4;

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}
