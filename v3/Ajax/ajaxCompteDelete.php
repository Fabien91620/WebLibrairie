<?php

include('../Fonctions.php');

$link = connectDB();
$id = $_POST["id"];

try {

    $req = "DELETE LIGNE_PANIER FROM LIGNE_PANIER INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID WHERE PANIER.ID_COMPTE ='$id'";
    $res = $link->prepare($req);
    $row = $res->execute();

    $req4 = "DELETE LIGNE_WISHLIST FROM LIGNE_WISHLIST INNER JOIN WISHLIST ON LIGNE_WISHLIST.ID_WISHLIST = WISHLIST.ID WHERE WISHLIST.ID_COMPTE ='$id'";
    $res4 = $link->prepare($req4);
    $row4 = $res4->execute();

    $req1 = "DELETE FROM WISHLIST WHERE ID_COMPTE='$id'";
    $res1 = $link->prepare($req1);
    $row1 = $res1->execute();

    $req2 = "DELETE FROM PANIER WHERE ID_COMPTE='$id'";
    $res2 = $link->prepare($req2);
    $row2 = $res2->execute();

    $req3 = "DELETE FROM COMPTE WHERE USER='$id'";
    $res3 = $link->prepare($req3);
    $row3 = $res3->execute();

    echo $req4;

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}
