<?php

include('../Fonctions.php');

$link = connectDB();
$idLivre = $_POST["idLivre"];
$idPanier = $_POST['idPanier'];
$nb = $_POST['qty'];

try {
    $req = "INSERT INTO `LIGNE_PANIER`(`ID_LIVRE`, `ID_PANIER`, `NB_PRODUIT`) VALUES ('$idLivre', '$idPanier', '$nb')";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        echo "ok";
    }
    echo $req;

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}