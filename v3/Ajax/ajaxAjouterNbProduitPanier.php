<?php
include('../Fonctions.php');

$link = connectDB();
$nb = $_POST["nb"];
$idLivre = $_POST["idl"];
$idUser = $_SESSION['Usercompte'];
$idPanier = $_SESSION['IdPanier'];

try {
    $req = "UPDATE LIGNE_PANIER SET NB_PRODUIT=$nb WHERE LIGNE_PANIER.ID_LIVRE=$idLivre AND LIGNE_PANIER.ID_PANIER = '$idPanier'";
    $res = $link->prepare($req);
    $row = $res->execute();

    $sql1 = $link->query("SELECT ROUND(LIVRE.PRIX_UNITAIRE * LIGNE_PANIER.NB_PRODUIT, 2) AS PRIXCALCULER FROM LIVRE INNER JOIN LIGNE_PANIER on LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER on LIGNE_PANIER.ID_PANIER = PANIER.ID WHERE LIVRE.ID='$idLivre' AND PANIER.ID = '$idPanier'");
    $result = $sql1->fetch();
    echo $result[0];

}
catch(PDOException $e)
{
    echo $req . "<br>" . $e->getMessage();
}
