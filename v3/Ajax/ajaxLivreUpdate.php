<?php

include('../Fonctions.php');

$link = connectDB();
$id = $_POST["id"];
$auteur = htmlspecialchars($_POST["auteur"], ENT_QUOTES);
$genre = $_POST["genre"];
$isbn = htmlspecialchars($_POST["isbn"], ENT_QUOTES);
$titre = htmlspecialchars($_POST["titre"], ENT_QUOTES);
$resumer = htmlspecialchars($_POST["resumer"], ENT_QUOTES);
$date = htmlspecialchars($_POST["date"], ENT_QUOTES);
$prix = htmlspecialchars($_POST["prix"], ENT_QUOTES);
$editeur = htmlspecialchars($_POST["editeur"], ENT_QUOTES);
$image75 = 'images/product/sm-img/'.htmlspecialchars($_POST["image75"], ENT_QUOTES);
$image80 = 'images/product/sm-3/'.htmlspecialchars($_POST["image80"], ENT_QUOTES);
$image270 = 'images/books/'.htmlspecialchars($_POST["image270"], ENT_QUOTES);
$image304 = 'images/best-sell-product/'.htmlspecialchars($_POST["image304"], ENT_QUOTES);
$image450 = 'images/product/'.htmlspecialchars($_POST["image450"], ENT_QUOTES);
$best = htmlspecialchars($_POST["best"], ENT_QUOTES);
$coeur = htmlspecialchars($_POST["coeur"], ENT_QUOTES);
$n = $_POST["nouv"];

try {
    $req = "UPDATE LIVRE
        SET ID_ECRIVAIN ='$auteur',
            ISBN ='$isbn',
            TITRE='$titre',
            RESUME='$resumer',
            DT_PARUTION='$date',
            PRIX_UNITAIRE='$prix',
            BEST_SELLER='$best',
            COEUR='$coeur',
            EDITEUR='$editeur'
        WHERE id='$id'";
    $res = $link->prepare($req);
    $row = $res->execute();

    $req7 = "DELETE FROM GENRE_LIVRE WHERE ID_LIVRE = '$id'";
    $res7 = $link->prepare($req7);
    $row7 = $res7->execute();

    $req1 = "INSERT INTO GENRE_LIVRE(ID_GENRE, ID_LIVRE) VALUES ('$genre', '$id')";
    $res1 = $link->prepare($req1);
    $row1 = $res1->execute();

    if($n == 1){
        $req8 = "DELETE FROM IMAGE_LIVRE WHERE ID_LIVRE = '$id'";
        $res8 = $link->prepare($req8);
        $row8 = $res8->execute();

        $req2 = "INSERT INTO IMAGE_LIVRE(ID_LIVRE, SOURCE, FORMAT) VALUES ('$id', '$image75', '75x94')";
        $res2 = $link->prepare($req2);
        $row2 = $res2->execute();

        $req3 = "INSERT INTO IMAGE_LIVRE(ID_LIVRE, SOURCE, FORMAT) VALUES ('$id', '$image80', '80x100')";
        $res3 = $link->prepare($req3);
        $row3 = $res3->execute();

        $req4 = "INSERT INTO IMAGE_LIVRE(ID_LIVRE, SOURCE, FORMAT) VALUES ('$id', '$image270', '270x340')";
        $res4 = $link->prepare($req4);
        $row4 = $res4->execute();

        $req5 = "INSERT INTO IMAGE_LIVRE(ID_LIVRE, SOURCE, FORMAT) VALUES ('$id', '$image304', '304x384')";
        $res5 = $link->prepare($req5);
        $row5 = $res5->execute();

        $req6 = "INSERT INTO IMAGE_LIVRE(ID_LIVRE, SOURCE, FORMAT) VALUES ('$id', '$image450', '450x565')";
        $res6 = $link->prepare($req6);
        $row6 = $res6->execute();
    }

    echo 'Mise à jour effectuer !';

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}