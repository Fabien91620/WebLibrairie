<?php
include('../Fonctions.php');

$link = connectDB();
$idUser = $_SESSION['Usercompte'];

try {

    $sql1 = $link->query("SELECT ROUND(SUM(LIVRE.PRIX_UNITAIRE * LIGNE_PANIER.NB_PRODUIT), 2) AS PRIX_TOTAL FROM LIVRE INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID WHERE PANIER.DT_COM is Null AND PANIER.ID_COMPTE = '$idUser'");
    $result = $sql1->fetch();
    echo $result[0];

}
catch(PDOException $e)
{
    echo $req . "<br>" . $e->getMessage();
}
