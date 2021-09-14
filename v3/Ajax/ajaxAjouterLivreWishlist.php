<?php

include('../Fonctions.php');

$link = connectDB();
$idLivre = $_POST["idLivre"];
$idWishlist = $_POST['idWishlist'];

try {
    $req = "INSERT INTO `LIGNE_WISHLIST`(`ID_LIVRE`, `ID_WISHLIST`) VALUES ('$idLivre', '$idWishlist')";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        echo "ok";
    }

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}