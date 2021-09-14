<?php
session_start();
include('Fonctions.php');

$retour  = "0";
if(isset($_REQUEST['cible'])){
    /*** actualiser le nombre total de fichier ***/
    if($_REQUEST['cible']=='wishlist'){
        $getNbWishListe = getNbArticleWishliste();
        $nbWishListe = $getNbWishListe->fetch();
        $retour = $nbWishListe[0];
    }
    else if($_REQUEST['cible']=='panier'){
        $getNbLivre = getNbArticlePanier();
        $nbLivre = $getNbLivre->fetch();
        $retour = $nbLivre[0];
    }
}
echo $retour;