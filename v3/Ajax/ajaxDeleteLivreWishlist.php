<?php

include('../Fonctions.php');

$link = connectDB();
$idPanier = $_SESSION['IdWishList'];
$idLivre = $_POST["id"];

try {
    $req = "DELETE FROM LIGNE_WISHLIST WHERE LIGNE_WISHLIST.ID_LIVRE = '$idLivre' AND LIGNE_WISHLIST.ID_WISHLIST = '$idPanier'";
    $res = $link->prepare($req);
    $row = $res->execute();
    if ($row == true) {
        echo "ok";
    }

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}
