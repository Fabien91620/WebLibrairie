<?php
include('../Fonctions.php');

$link = connectDB();
$idPanier = $_SESSION['IdPanier'];
$idLivre = $_POST["id"];

try {
    $req = "DELETE FROM `LIGNE_PANIER` WHERE `LIGNE_PANIER`.`ID_LIVRE` = '$idLivre' AND `LIGNE_PANIER`.`ID_PANIER` = '$idPanier'";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
       echo "ok";
    }

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}
