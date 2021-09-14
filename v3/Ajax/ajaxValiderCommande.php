<?php

include('../Fonctions.php');

$link = connectDB();
$idPanier = $_SESSION['IdPanier'];
$idCompte = $_SESSION['Usercompte'];
$date = date("Y-m-d") ;

try {
    $req = "UPDATE PANIER SET DT_COM='$date' WHERE ID='$idPanier'";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        CreerPanier($idCompte, $date);
        getPanier($_SESSION['Usercompte']);
        echo "ok";
    }

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}