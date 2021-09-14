<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WebLibrairie | Ajouter</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/icon.png">

    <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer js -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>

    <?php include_once('Fonctions.php'); ?>
</head>
<body>
<!-- Main wrapper -->
<div class="wrapper" id="wrapper">
    <!-- Header -->
    <header id="wn__header" class="oth-page header__area header__absolute sticky__header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo/logo.png" alt="logo images">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-block">
                    <nav class="mainmenu__nav">
                        <ul class="meninmenu d-flex justify-content-start">
                            <li class="drop with--one--item"><a href="index.php">Accueil</a></li>

                            <li class="drop"><a href="shop-grid.php?categorie=Tout">Livres</a>
                                <div class="megamenu mega03">
                                    <ul class="item item03">
                                        <li class="title">Catégories</li>
                                        <li><a href="shop-grid.php?categorie=Biographie">Biographie</a></li>
                                        <li><a href="shop-grid.php?categorie=Business">Business </a></li>
                                        <li><a href="shop-grid.php?categorie=Cuisine">Cuisine</a></li>
                                        <li><a href="shop-grid.php?categorie=Bien">Bien-être</a></li>
                                        <li><a href="shop-grid.php?categorie=Histoire">Histoire </a></li>
                                    </ul>
                                    <ul class="item item03">
                                        <li class="title">Les favoris</li>
                                        <li><a href="shop-grid.php?categorie=Mystérieux">Mystérieux</a></li>
                                        <li><a href="shop-grid.php?categorie=Religion">Religion</a></li>
                                        <li><a href="shop-grid.php?categorie=Roman">Roman</a></li>
                                        <li><a href="shop-grid.php?categorie=Fiction">Fiction/Fantasy</a></li>
                                        <li><a href="shop-grid.php?categorie=Mangas">Mangas</a></li>
                                    </ul>
                                    <ul class="item item03">
                                        <li class="title">Collections</li>
                                        <li><a href="shop-grid.php?categorie=Science">Science </a></li>
                                        <li><a href="shop-grid.php?categorie=Fiction">Fiction/Fantasy</a></li>
                                        <li><a href="shop-grid.php?categorie=Développement">Développement personnel</a></li>
                                        <li><a href="shop-grid.php?categorie=BD">BD</a></li>
                                        <li><a href="shop-grid.php?categorie=Humour">Humour</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop"><a href="shop-grid.php?categorie=Enfants">Enfants</a>
                                <div class="megamenu mega02">
                                    <ul class="item item02">
                                        <li class="title">Les favoris</li>
                                        <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                        <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                        <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                        <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                        <li><a href="shop-grid.php?categorie=Biographie">Harry Potter</a></li>
                                    </ul>
                                    <ul class="item item02">
                                        <li class="title">Pour les plus petits</li>
                                        <li><a href="shop-grid.php?categorie=Biographie">Livre animé</a></li>
                                        <li><a href="shop-grid.php?categorie=Biographie">Livre effaçable</a></li>
                                        <li><a href="shop-grid.php?categorie=Biographie">Comte</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="drop"><a href="blog.html">Blog</a>
                                <div class="megamenu dropdown">
                                    <ul class="item item01">
                                        <li><a href="blog.html">Blog Page</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-6 col-6 col-lg-2">
                    <ul class="header__sidebar__right d-flex justify-content-end align-items-center">
                        <li class="shop_search"><a class="search__active" href="#"></a></li>
                        <?php if(!isset($_SESSION['Usercompte'])): ?>
                        <li class="wishlist"><a href="wishlist.php"></a></li>
                        <li class="shopcart"><a class="cartbox_active" href=""></a>
                            <div class="block-minicart minicart__active">
                                <div class="minicart-content-wrapper">
                                    <div class="micart__close">
                                        <span>Fermer</span>
                                    </div>
                                    <div class="mini_action cart">
                                        <a class="cart__btn" href="my-account.php">Se connecter</a>
                                    </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <?php $getNbLivre = getNbArticlePanier(); ?>
                            <?php $nbLivre = $getNbLivre->fetch(); ?>
                            <?php $getNbWishListe = getNbArticleWishliste(); ?>
                            <?php $nbWishListe = $getNbWishListe->fetch(); ?>
                        <li class="wishlist"><a href="wishlist.php"><span id="alertWishlist" class="product_qun"><?php echo $nbWishListe[0]; ?></span></a></li>
                        <li class="shopcart"><a class="cartbox_active" href=""><span id="alertPanier" class="product_qun"><?php echo $nbLivre[0]; ?></span></a>
                            <div id="divPanier" class="block-minicart minicart__active">
                                <div class="minicart-content-wrapper">
                                    <div class="micart__close">
                                        <span>Fermer</span>
                                    </div>
                                    <div class="items-total d-flex justify-content-between">
                                        <span><?php echo $nbLivre[0]; ?><?php if($nbLivre[0] > 1){ echo " articles"; }else{ echo " article"; } ?> </span>
                                        <span>Total</span>
                                    </div>
                                    <div class="total_amount text-right">
                                        <?php $prixTotal = afficherPrixTotal(); ?>
                                        <?php foreach($prixTotal as $data): ?>
                                            <?php if($data['PRIX_TOTAL'] == null): ?>
                                                <span><?php echo 0;?> €</span>
                                            <?php else: ?>
                                                <span><?php echo $data['PRIX_TOTAL'];?> €</span>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="mini_action checkout">
                                        <a class="checkout__btn" href="cart.php">Acheter</a>
                                    </div>
                                    <div class="single__items">
                                        <div class="miniproduct">
                                            <?php $nb_liens=0; $compteur = 0; $article = afficherPanier(); ?>
                                            <?php foreach($article as $data): ?>
                                                <?php if($compteur < 3):?>
                                                    <?php $compteur++; $nb_liens++; ?>
                                                    <div hidden><input id="idLivre_<?php echo $nb_liens ?>" name="idLivre_<?php echo $nb_liens ?>" type="hidden" value="<?php echo $data['ID'] ?>"></div>
                                                    <div class="item01 d-flex" id="div_<?php echo $nb_liens ?>">
                                                        <div class="thumb">
                                                            <a href="single-product.php?livre=<?php echo $data['ID'] ?> "><img src="<?php echo $data['SOURCE'];?>"></a>
                                                        </div>
                                                        <div class="content">
                                                            <h6><a href="single-product.php?livre=<?php echo $data['ID'] ?> "><?php echo $data['TITRE'];?></a></h6>
                                                            <span class="prize"><?php echo $data['PRIX_UNITAIRE'];?>0€</span>
                                                            <div class="product_prize d-flex justify-content-between">
                                                                    <span class="qun">Quantité:
                                                                        <?php if ($data['NB_PRODUIT'] < 10){
                                                                            echo "0".$data['NB_PRODUIT'];
                                                                        }
                                                                        else{
                                                                            echo $data['NB_PRODUIT'];
                                                                        }?></span>
                                                                <ul class="d-flex justify-content-end">
                                                                    <li><a onclick="del('idLivre_<?php echo $nb_liens ?>', 'div_<?php echo $nb_liens ?>');" href="#"><i class="zmdi zmdi-delete"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php else: ?>
                                                    <a href="cart.php"><p class='forget_pass'> Voir le reste</p></a>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <script>
                                                //Permet la suppression d'une ligne
                                                function del(idLivre, idligne) {
                                                    var id_livre = $('#'+ idLivre).val();
                                                    $.ajax({
                                                        url : 'Ajax/ajaxPopUPPanierDelete.php',
                                                        type : 'POST',
                                                        data : 'id=' + id_livre,
                                                        dataType : 'html',
                                                        success : function(code_html, statut){

                                                        }
                                                    });
                                                    $('#'+idligne).remove();
                                                }
                                            </script>
                                        </div>
                                    </div>
                                    <div class="mini_action cart">
                                        <a class="cart__btn" href="cart.php">Aller au panier</a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </li>
                        <li class="setting__bar__icon"><a class="setting__active" href="#"></a>
                            <div class="searchbar__content setting__block">
                                <div class="content-inner">
                                    <div class="switcher-currency">
                                        <strong class="label switcher-label">
                                            <span>Mon Compte</span>
                                        </strong>
                                        <div class="switcher-options">
                                            <div class="switcher-currency-trigger">
                                                <div class="setting__menu">
                                                    <?php if(!isset($_SESSION['Usercompte'])): ?>
                                                        <span><a href="my-account.php">S'identifier / S'inscrire</a></span>
                                                    <?php else: ?>
                                                        <span><a href="MonCompte.php">Mon compte</a></span>
                                                        <span><a href="wishlist.php">Ma Wishlist</a></span>
                                                        <?php if($_SESSION['Typecompte'] == 'ADM'): ?>
                                                            <span><a href="Administration.php">Administration</a></span>
                                                        <?php endif; ?>
                                                        <span><a href="Deconnexion.php">Déconnexion</a></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- //Header -->
    <!-- Start Search Popup -->
    <div class="brown--color box-search-content search_active block-bg close__top">
        <form id="search_mini_form" class="minisearch" action="" method="post">
            <div class="field__search">
                <input name="recherche" type="text" placeholder="Chercher un titre ...">
                <div class="action">
                    <a href="#"><button type="submit" value="" name="rechercher" style="all: unset; background-color: transparent; border-color: transparent;"><i class="zmdi zmdi-search"></i></button></a>
                </div>
                <?php if(isset($_POST['rechercher'])):?>
                    <?php $_SESSION['titre'] = $_POST['recherche']; ?>
                    <?php echo '<script>document.location.replace("shop-grid-r.php");</script>'; ?>
                <?php endif; ?>
            </div>
        </form>
        <div class="close__wrap">
            <span>fermer</span>
        </div>
    </div>
    <!-- End Search Popup -->
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bg-image--6" style="padding-top: 45px; padding-bottom: 45px;">
    </div>
    <!-- End Bradcaump area -->
    <!-- Start My Account Area -->
    <section class="my_account_area pt--80 pb--55 bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Ajouter <span class="color--theme">Livres</span></h2>
                    </div>
                </div>
            </div>
            <div id="tablePanier" class="table-content wnro__table table-responsive">
                <table id="tableLivre">
                    <thead>
                    <tr class="title-top">
                        <th></th>
                        <th class="product-thumbnail">Ecrivain</th>
                        <th class="product-thumbnail">Genre</th>
                        <th class="product-thumbnail">ISBN</th>
                        <th class="product-name">Titre</th>
                        <th class="product-price">Résumer</th>
                        <th class="product-quantity">Date de parution</th>
                        <th class="product-subtotal">Prix Unitaire</th>
                        <th class="product-remove">Editeur</th>
                        <th class="product-remove">Best seller</th>
                        <th class="product-remove">Coup de coeur</th>
                        <th class="product-remove">Image 75x94</th>
                        <th class="product-remove">Image 80x100</th>
                        <th class="product-remove">Image 270x340</th>
                        <th class="product-remove">Image 304x384</th>
                        <th class="product-remove">Image 450x565</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $nb_liens=0; $link = connectDB(); ?>
                    <?php $livres = afficherToutLesLivres(); ?>
                    <?php foreach ($livres as $data):?>
                        <?php $nb_liens++; ?>
                        <?php $req = $link->query("SELECT IMAGE_LIVRE.SOURCE FROM IMAGE_LIVRE WHERE IMAGE_LIVRE.FORMAT='75x94' AND IMAGE_LIVRE.ID_LIVRE =".$data['ID']); ?>
                        <?php $tailleImage75x94 = $req->fetch(); ?>
                        <?php $req = $link->query("SELECT IMAGE_LIVRE.SOURCE FROM IMAGE_LIVRE WHERE IMAGE_LIVRE.FORMAT='80x100' AND IMAGE_LIVRE.ID_LIVRE =".$data['ID']); ?>
                        <?php $tailleImage80x100 = $req->fetch(); ?>
                        <?php $req = $link->query("SELECT IMAGE_LIVRE.SOURCE FROM IMAGE_LIVRE WHERE IMAGE_LIVRE.FORMAT='270x340' AND IMAGE_LIVRE.ID_LIVRE =".$data['ID']); ?>
                        <?php $tailleImage270x340 = $req->fetch(); ?>
                        <?php $req = $link->query("SELECT IMAGE_LIVRE.SOURCE FROM IMAGE_LIVRE WHERE IMAGE_LIVRE.FORMAT='304x384' AND IMAGE_LIVRE.ID_LIVRE =".$data['ID']); ?>
                        <?php $tailleImage304x384 = $req->fetch(); ?>
                        <?php $req = $link->query("SELECT IMAGE_LIVRE.SOURCE FROM IMAGE_LIVRE WHERE IMAGE_LIVRE.FORMAT='450x565' AND IMAGE_LIVRE.ID_LIVRE =".$data['ID']); ?>
                        <?php $tailleImage450x565 = $req->fetch(); ?>
                        <tr id="idTr_<?= $nb_liens ?>">
                            <td hidden><input id="idLigne_<?php echo $nb_liens ?>" name="idLigne_<?php echo $nb_liens ?>" type="hidden" value="<?php echo $data['ID'] ?>"></td>
                            <td class="product-remove"><a onclick="del('idLigne_<?php echo $nb_liens ?>', 'idTr_<?= $nb_liens ?>')" style="margin-right: 10px; cursor: pointer;">X</a></td>
                            <td><select onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="auteur_<?php echo $nb_liens ?>">
                                    <?php
                                    $req = $link->query("SELECT ID, NOM FROM ECRIVAIN ORDER BY NOM ASC");
                                    foreach($req as $d)
                                    {
                                        echo "<option value='".$d[0]."'";

                                        $req1 = $link->query("SELECT ID_ECRIVAIN FROM  LIVRE 
                                                               WHERE ID_ECRIVAIN = '".$d[0]."'
                                                                     AND ID = '". $data['ID']."' 
                                                            ");
                                        if($req1->rowCount() >0){
                                            echo " selected=selected ";
                                        }
                                        echo ">".stripslashes($d[1])."</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                            <td><select onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="genre_<?php echo $nb_liens ?>">
                                    <?php
                                    $req = $link->query("SELECT ID, LIBELLE FROM GENRE ORDER BY LIBELLE ASC");
                                    foreach($req as $d)
                                    {
                                        echo "<option value='".$d[0]."'";

                                        $req1 = $link->query("SELECT ID_GENRE FROM  GENRE_LIVRE 
                                                               WHERE ID_GENRE = '".$d[0]."'
                                                                     AND ID_LIVRE = '". $data['ID']."' 
                                                            ");
                                        if($req1->rowCount() >0){
                                            echo " selected=selected ";
                                        }
                                        echo ">".stripslashes($d[1])."</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                            <td><textarea onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="isbn_<?php echo $nb_liens ?>" style="width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;"><?= $data['ISBN'] ?></textarea></td>
                            <td><textarea onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="titre_<?php echo $nb_liens ?>" style="width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;"><?= $data['TITRE'] ?></textarea></td>
                            <td><textarea onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="resumer_<?php echo $nb_liens ?>" style="width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;"><?= $data['RESUME'] ?></textarea></td>
                            <td><input onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="date_<?php echo $nb_liens ?>" type="date" style="width: 200px;" value="<?= $data['DT_PARUTION'] ?>"></td>
                            <td><textarea onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="prix_<?php echo $nb_liens ?>" style="width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;"><?= $data['PRIX_UNITAIRE'] ?></textarea></td>
                            <td><textarea onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="editeur_<?php echo $nb_liens ?>" style="width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;"><?= $data['EDITEUR'] ?></textarea></td>
                            <td><input onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="best_<?php echo $nb_liens ?>" style="width: 20px;" type="checkbox" value="1" <?php echo ($data['BEST_SELLER'] == 0)?'unchecked':''; ?>checked></td>
                            <td><input onclick="save(this.id, <?php echo $nb_liens ?>, true);" id="coeur_<?php echo $nb_liens ?>" style="width: 20px;" type="checkbox" value="1" <?php echo ($data['COEUR'] == 0)?'unchecked':''; ?>checked></td>
                            <td><span id="image75_<?php echo $nb_liens ?>" style="width: 200px;"><?= $tailleImage75x94[0]; ?></span></td>
                            <td><span id="image80_<?php echo $nb_liens ?>" style="width: 200px;"><?= $tailleImage80x100[0]; ?></span></td>
                            <td><span id="image270_<?php echo $nb_liens ?>" style="width: 200px;"><?= $tailleImage270x340[0]; ?></span></td>
                            <td><span id="image304_<?php echo $nb_liens ?>" style="width: 200px;"><?= $tailleImage304x384[0]; ?></span></td>
                            <td><span id="image450_<?php echo $nb_liens ?>" style="width: 200px;"><?= $tailleImage450x565[0]; ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <button id="btnAjouterLigne" class="tocart" title="Ajouter" style="margin-top: 1%; background: #e59285 none repeat scroll 0 0; border: 0 none; color: #fff; font-size: 14px; font-weight: 600; height: 40px; line-height: 40px; padding: 0 25px; text-transform: uppercase;">Ajouter</button>
            <div id="test"></div>
        </div>
        <?php
        $requetteId = $link->query("SELECT MAX(id) as id FROM LIVRE");
        foreach ($requetteId as $iddata): ?>
            <input id="id_add" name="id_add" value="<?php echo $iddata['id']; ?>" type="hidden" />
        <?php endforeach; ?>
        <input id="nb_entrees" name="nb_entrees" value="<?php echo $nb_liens?>" type="hidden" />
    </section>
    <?php

    ?>
    <!-- End My Account Area -->
    <!-- Footer Area -->
    <footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
        <div class="footer-static-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__widget footer__menu">
                            <div class="ft__logo">
                                <a href="index.php">
                                    <img src="images/logo/3.png" alt="logo">
                                </a>
                                <p>“Un beau livre, c'est celui qui sème à foison les points d'interrogation.”<span style="font-size: 70%;"> Jean Cocteau</span></p>
                            </div>
                            <div class="footer__content">
                                <ul class="social__net social__net--2 d-flex justify-content-center">
                                    <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#"><i class="bi bi-google"></i></a></li>
                                    <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                    <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                                <ul class="mainmenu d-flex justify-content-center">
                                    <li><a href="shop-grid.php?categorie=Best">Best Seller</a></li>
                                    <li><a href="shop-grid.php?categorie=Tout">Livres</a></li>
                                    <?php if(isset($_SESSION['Usercompte'])): ?>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                    <?php else: ?>
                                        <li><a href="my-account.php">Wishlist</a></li>
                                    <?php endif; ?>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="copyright">
                            <div class="copy__right__inner text-left">
                                <p>By Barrios Fabien</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="payment text-right">
                            <img src="images/icons/payment.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- //Footer Area -->
</div>
<!-- //Main wrapper -->

<!-- JS Files -->
<script>
    function save(idInput, idLigne, bool){
        var id_sel = $('#'+idInput);
        var valeurDiv = id_sel.val();
        if(document.getElementById('best_'+idLigne).checked == true){
            var id_best1 = 1;
        }
        else{
            var id_best1 = 0;
        }
        if(document.getElementById('coeur_'+idLigne).checked == true){
            var id_coeur1 = 1;
        }
        else{
            var id_coeur1 = 0;
        }
        var id_ligne1 = $('#idLigne_'+idLigne).val();
        var id_auteur1 = $('#auteur_'+idLigne).val();
        var id_genre1 = $('#genre_'+idLigne).val();
        var id_isbn1 = $('#isbn_'+idLigne).val();
        var id_titre1 = $('#titre_'+idLigne).val();
        var id_resumer1 = $('#resumer_'+idLigne).val();
        var id_date1 = $('#date_'+idLigne).val();
        var id_prix1 = $('#prix_'+idLigne).val();
        var id_editeur1 = $('#editeur_'+idLigne).val();
        var id_image751 = $('#image75_'+idLigne).val();
        var id_image801 = $('#image80_'+idLigne).val();
        var id_image2701 = $('#image270_'+idLigne).val();
        var id_image3041 = $('#image304_'+idLigne).val();
        var id_image4501 = $('#image450_'+idLigne).val();
        var nouv = 0;
        //document.getElementById('test').innerHTML = '#'+idInput;
        $(document).mouseup(function (e){
            if (!id_sel.is(e.target)&& id_sel.has(e.target).length === 0) {
                var valeurDivSortie = id_sel.val();
                //verifie si la valeur a changer
                if (valeurDivSortie != valeurDiv || valeurDivSortie == null) {
                    if(bool == true) {
                        if (document.getElementById('best_' + idLigne).checked == true) {
                            var id_best = 1;
                        } else {
                            var id_best = 0;
                        }
                        if (document.getElementById('coeur_' + idLigne).checked == true) {
                            var id_coeur = 1;
                        } else {
                            var id_coeur = 0;
                        }
                        var id_ligne = $('#idLigne_' + idLigne).val();
                        var id_auteur = $('#auteur_' + idLigne).val();
                        var id_genre = $('#genre_' + idLigne).val();
                        var id_isbn = $('#isbn_' + idLigne).val();
                        var id_titre = $('#titre_' + idLigne).val();
                        var id_resumer = $('#resumer_' + idLigne).val();
                        var id_date = $('#date_' + idLigne).val();
                        var id_prix = $('#prix_' + idLigne).val();
                        var id_editeur = $('#editeur_' + idLigne).val();
                        var id_image75 = $('#image75_' + idLigne).val();
                        var id_image80 = $('#image80_' + idLigne).val();
                        var id_image270 = $('#image270_' + idLigne).val();
                        var id_image304 = $('#image304_' + idLigne).val();
                        var id_image450 = $('#image450_' + idLigne).val();
                        //permet d'envoyer les variable en $_POST
                        $.ajax({
                            url: 'Ajax/ajaxLivreUpdate.php',
                            type: 'POST',
                            data: 'id=' + id_ligne + '&auteur=' + id_auteur + '&genre=' + id_genre + '&isbn=' + id_isbn + '&titre=' + id_titre
                                + '&resumer=' + id_resumer + '&date=' + id_date + '&prix=' + id_prix + '&editeur=' + id_editeur + '&image75=' + id_image75
                                + '&image80=' + id_image80 + '&image270=' + id_image270 + '&image304=' + id_image304 + '&image450=' + id_image450
                                + '&best=' + id_best + '&coeur=' + id_coeur + '&nouv=' + nouv,
                            dataType: 'html',
                            success: function (code_html, statut) {
                                if(code_html == 'Mise à jour effectuer !'){
                                    document.getElementById('test').innerHTML = code_html;
                                    $('#test').css({
                                        color : 'green'
                                    });
                                }
                                else{
                                    document.getElementById('test').innerHTML = code_html;
                                    $('#test').css({
                                        color: 'red'
                                    });
                                }
                                bool = false;
                            }
                        });
                    }
                }
                if (idInput.startsWith("best")) {
                    $.ajax({
                        url: 'Ajax/ajaxLivreUpdate.php',
                        type: 'POST',
                        data: 'id=' + id_ligne1 + '&auteur=' + id_auteur1 + '&genre=' + id_genre1 + '&isbn=' + id_isbn1 + '&titre=' + id_titre1
                            + '&resumer=' + id_resumer1 + '&date=' + id_date1 + '&prix=' + id_prix1 + '&editeur=' + id_editeur1 + '&image75=' + id_image751
                            + '&image80=' + id_image801 + '&image270=' + id_image2701 + '&image304=' + id_image3041 + '&image450=' + id_image4501
                            + '&best=' + id_best1 + '&coeur=' + id_coeur1 + '&nouv=' + nouv,
                        dataType: 'html',
                        success: function (code_html, statut) {
                            if(code_html == 'Mise à jour effectuer !'){
                                document.getElementById('test').innerHTML = code_html;
                                $('#test').css({
                                    color : 'green'
                                });
                            }
                            else{
                                document.getElementById('test').innerHTML = code_html;
                                $('#test').css({
                                    color: 'red'
                                });
                            }
                        }
                    });
                }
                if (idInput.startsWith("coeur")) {
                    $.ajax({
                        url: 'Ajax/ajaxLivreUpdate.php',
                        type: 'POST',
                        data: 'id=' + id_ligne1 + '&auteur=' + id_auteur1 + '&genre=' + id_genre1 + '&isbn=' + id_isbn1 + '&titre=' + id_titre1
                            + '&resumer=' + id_resumer1 + '&date=' + id_date1 + '&prix=' + id_prix1 + '&editeur=' + id_editeur1 + '&image75=' + id_image751
                            + '&image80=' + id_image801 + '&image270=' + id_image2701 + '&image304=' + id_image3041 + '&image450=' + id_image4501
                            + '&best=' + id_best1 + '&coeur=' + id_coeur1 + '&nouv=' + nouv,
                        dataType: 'html',
                        success: function (code_html, statut) {
                            if(code_html == 'Mise à jour effectuer !'){
                                document.getElementById('test').innerHTML = code_html;
                                $('#test').css({
                                    color : 'green'
                                });
                            }
                            else{
                                document.getElementById('test').innerHTML = code_html;
                                $('#test').css({
                                    color: 'red'
                                });
                            }
                        }
                    });
                }
            }
        });
    }

    function save1(idInput, idLigne, idBaseLigne, bool){
        var id_sel = $('#'+idInput);
        var valeurDiv = id_sel.val();
        var id_ligne = idBaseLigne;
        if(document.getElementById('best_'+idLigne).checked == true){
            var id_best1 = 1;
        }
        else{
            var id_best1 = 0;
        }
        if(document.getElementById('coeur_'+idLigne).checked == true){
            var id_coeur1 = 1;
        }
        else{
            var id_coeur1 = 0;
        }
        var id_ligne1 = idBaseLigne;
        var id_auteur1 = $('#auteur_'+idLigne).val();
        var id_genre1 = $('#genre_'+idLigne).val();
        var id_isbn1 = $('#isbn_'+idLigne).val();
        var id_titre1 = $('#titre_'+idLigne).val();
        var id_resumer1 = $('#resumer_'+idLigne).val();
        var id_date1 = $('#date_'+idLigne).val();
        var id_prix1 = $('#prix_'+idLigne).val();
        var id_editeur1 = $('#editeur_'+idLigne).val();
        var id_image751 = $('#image75_'+idLigne).val();
        var id_image801 = $('#image80_'+idLigne).val();
        var id_image2701 = $('#image270_'+idLigne).val();
        var id_image3041 = $('#image304_'+idLigne).val();
        var id_image4501 = $('#image450_'+idLigne).val();
        var nouv = 1;
        $(document).mouseup(function (e){
            if (!id_sel.is(e.target)&& id_sel.has(e.target).length === 0) {
                var valeurDivSortie = id_sel.val();
                //verifie si la valeur a changer
                if (valeurDivSortie != valeurDiv || valeurDivSortie == null) {
                        if (document.getElementById('best_' + idLigne).checked == true) {
                            var id_best = 1;
                        } else {
                            var id_best = 0;
                        }
                        if (document.getElementById('coeur_' + idLigne).checked == true) {
                            var id_coeur = 1;
                        } else {
                            var id_coeur = 0;
                        }
                        var id_auteur = $('#auteur_' + idLigne).val();
                        var id_genre = $('#genre_' + idLigne).val();
                        var id_isbn = $('#isbn_' + idLigne).val();
                        var id_titre = $('#titre_' + idLigne).val();
                        var id_resumer = $('#resumer_' + idLigne).val();
                        var id_date = $('#date_' + idLigne).val();
                        var id_prix = $('#prix_' + idLigne).val();
                        var id_editeur = $('#editeur_' + idLigne).val();
                        var id_image75 = $('#image75_' + idLigne).val().split("\\");
                        var id_image80 = $('#image80_' + idLigne).val().split("\\");
                        var id_image270 = $('#image270_' + idLigne).val().split("\\");
                        var id_image304 = $('#image304_' + idLigne).val().split("\\");
                        var id_image450 = $('#image450_' + idLigne).val().split("\\");
                        //permet d'envoyer les variable en $_POST
                        $.ajax({
                            url: 'Ajax/ajaxLivreUpdate.php',
                            type: 'POST',
                            data: 'id=' + id_ligne + '&auteur=' + id_auteur + '&genre=' + id_genre + '&isbn=' + id_isbn + '&titre=' + id_titre
                                + '&resumer=' + id_resumer + '&date=' + id_date + '&prix=' + id_prix + '&editeur=' + id_editeur + '&image75=' + id_image75[2]
                                + '&image80=' + id_image80[2] + '&image270=' + id_image270[2] + '&image304=' + id_image304[2] + '&image450=' + id_image450[2]
                                + '&best=' + id_best + '&coeur=' + id_coeur + '&nouv=' + nouv,
                            dataType: 'html',
                            success: function (code_html, statut) {
                                if(code_html == 'Mise à jour effectuer !'){
                                    document.getElementById('test').innerHTML = code_html;
                                    $('#test').css({
                                        color : 'green'
                                    });
                                }
                                else{
                                    document.getElementById('test').innerHTML = code_html;
                                    $('#test').css({
                                        color: 'red'
                                    });
                                }
                                bool = false;
                            }
                        });
                }
                if (idInput.startsWith("best")) {
                    $.ajax({
                        url: 'Ajax/ajaxLivreUpdate.php',
                        type: 'POST',
                        data: 'id=' + id_ligne1 + '&auteur=' + id_auteur1 + '&genre=' + id_genre1 + '&isbn=' + id_isbn1 + '&titre=' + id_titre1
                            + '&resumer=' + id_resumer1 + '&date=' + id_date1 + '&prix=' + id_prix1 + '&editeur=' + id_editeur1 + '&image75=' + id_image751
                            + '&image80=' + id_image801 + '&image270=' + id_image2701 + '&image304=' + id_image3041 + '&image450=' + id_image4501
                            + '&best=' + id_best1 + '&coeur=' + id_coeur1 + '&nouv=' + nouv,
                        dataType: 'html',
                        success: function (code_html, statut) {
                            if(code_html == 'Mise à jour effectuer !'){
                                document.getElementById('test').innerHTML = code_html;
                                $('#test').css({
                                    color : 'green'
                                });
                            }
                            else{
                                document.getElementById('test').innerHTML = code_html;
                                $('#test').css({
                                    color: 'red'
                                });
                            }
                        }
                    });
                }
                if (idInput.startsWith("coeur")) {
                    $.ajax({
                        url: 'Ajax/ajaxLivreUpdate.php',
                        type: 'POST',
                        data: 'id=' + id_ligne1 + '&auteur=' + id_auteur1 + '&genre=' + id_genre1 + '&isbn=' + id_isbn1 + '&titre=' + id_titre1
                            + '&resumer=' + id_resumer1 + '&date=' + id_date1 + '&prix=' + id_prix1 + '&editeur=' + id_editeur1 + '&image75=' + id_image751
                            + '&image80=' + id_image801 + '&image270=' + id_image2701 + '&image304=' + id_image3041 + '&image450=' + id_image4501
                            + '&best=' + id_best1 + '&coeur=' + id_coeur1 + '&nouv=' + nouv,
                        dataType: 'html',
                        success: function (code_html, statut) {
                            if(code_html == 'Mise à jour effectuer !'){
                                document.getElementById('test').innerHTML = code_html;
                                $('#test').css({
                                    color : 'green'
                                });
                            }
                            else{
                                document.getElementById('test').innerHTML = code_html;
                                $('#test').css({
                                    color: 'red'
                                });
                            }
                        }
                    });
                }
            }
        });
    }
</script>
<script>
    //Permet la suppression d'une ligne
    function del(idLigne, idTr) {
        var id_ligne = $('#'+ idLigne).val();
        $.ajax({
            url : 'Ajax/ajaxLivreDelete.php',
            type : 'POST',
            data : 'id=' + id_ligne,
            dataType : 'html',
            success : function(code_html, statut){
            }
        });
        $('#'+idTr).remove();
    }
    //Permet la suppression de la nouvelle ligne
    function del1(idLigne, idTr) {
        var id_ligne = $('#id_add').val();
        $.ajax({
            url : 'Ajax/ajaxLivreDelete.php',
            type : 'POST',
            data : 'id=' + id_ligne,
            dataType : 'html',
            success : function(code_html, statut){

            }
        });
        $('#'+idTr).remove();
    }
    //Permet d'ajouter la nouvelle ligne
    function add(){
        var id_ligne = parseInt(""+$("#id_add").val()+"")+1;
        $.ajax({
            url : 'Ajax/ajaxLivreAdd.php',
            type : 'POST',
            data : 'ligne=' + id_ligne,
            dataType : 'html',
            success : function(code_html, statut){
                var row = code_html;
                $('#id_add').val(row);
            }
        });
    }
</script>
<script>
    //tableau permetant d'afficher une nouvelle ligne
    nb_entrees = parseInt(""+$("#nb_entrees").val()+"");
    $("#btnAjouterLigne").click(function(){
        add();
        nb_entrees = nb_entrees + 1;
        var nb_add_ligne = parseInt(""+$("#id_add").val()+"")+1;
        $("#tableLivre>tbody:last").append(
            "<tr id='idtr_" + nb_entrees + "'>" +
            "<td hidden id='idLigne_" + nb_entrees + "' value=" + nb_add_ligne + "></td>" +
            "<td class='product-remove'><a onclick=del1('idLigne_" + nb_add_ligne + "','idtr_" + nb_entrees + "'); id='imgSuppr' name='imgSuppr' alt='Supprimer' style='margin-right: 10px; cursor: pointer;'>X</a></td>" +
            "<td><select onchange=save1('auteur_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"');  name='auteur_"+ nb_entrees+"' id='auteur_"+ nb_entrees+"'><?php
                $req = $link->query("SELECT ID, NOM FROM ECRIVAIN ORDER BY NOM ASC");
                foreach($req as $d)
                {
                    echo "<option value='".$d[0]."'";
                    echo ">".stripslashes($d[1])."</option>";
                }
                ?></select></td>" +
            "<td><select onchange=save1('genre_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"');  name='genre_"+ nb_entrees+"' id='genre_"+ nb_entrees+"'><?php
                $req = $link->query("SELECT ID, LIBELLE FROM GENRE ORDER BY LIBELLE ASC");
                foreach($req as $d)
                {
                    echo "<option value='".$d[0]."'";

                    echo ">".stripslashes($d[1])."</option>";
                }
                ?></select></td>" +
            "<td><textarea style='width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;' onclick=save1('isbn_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); id='isbn_"+ nb_entrees+"' name='isbn_"+ nb_entrees+"' type='text'></textarea></td>" +
            "<td><textarea style='width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;' onclick=save1('titre_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); id='titre_"+ nb_entrees+"' name='titre_"+ nb_entrees+"' type='text'></textarea></td>" +
            "<td><textarea style='width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;' onclick=save1('resumer_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); id='resumer_"+ nb_entrees+"' name='resumer_"+ nb_entrees+"' type='text'></textarea></td>" +
            "<td><input type='date'' style='width: 200px;' id='date_"+ nb_entrees+"'></td>" +
            "<td><textarea style='width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;' onclick=save1('prix_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); id='prix_"+ nb_entrees+"' name='prix_"+ nb_entrees+"' type='text'></textarea></td>" +
            "<td><textarea style='width: 200px; background: #e5e5e5 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #333; font-size: 15px; font-weight: normal; height: 40px; padding: 0 5px 0 10px;' onclick=save1('editeur_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); id='editeur_"+ nb_entrees+"' name='editeur_"+ nb_entrees+"' type='text'></textarea></td>" +
            "<td><input onclick=save1('best_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); style='width: 20px;' type='checkbox' value='1'  id='best_"+ nb_entrees+"' name='best_"+ nb_entrees+"'></td>" +
            "<td><input onclick=save1('coeur_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); style='width: 20px;' type='checkbox' value='1'  id='coeur_"+ nb_entrees+"' name='coeur_"+ nb_entrees+"'></td>" +
            "<td><input onclick=save1('image75_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); type='file' style='width: 280px;' id='image75_"+ nb_entrees+"' name='image75_"+ nb_entrees+"'></td>" +
            "<td><input onclick=save1('image80_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); type='file' style='width: 280px;' id='image80_"+ nb_entrees+"' name='image80_"+ nb_entrees+"'></td>" +
            "<td><input onclick=save1('image270_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); type='file' style='width: 280px;' id='image270_"+ nb_entrees+"' name='image270_"+ nb_entrees+"'></td>" +
            "<td><input onclick=save1('image304_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); type='file' style='width: 280px;' id='image304_"+ nb_entrees+"' name='image304_"+ nb_entrees+"'></td>" +
            "<td><input onclick=save1('image450_"+ nb_entrees+"','"+nb_entrees+"','"+nb_add_ligne+"'); type='file' style='width: 280px;' id='image450_"+ nb_entrees+"' name='image450_"+ nb_entrees+"'></td>" +
            "</tr>" +
            "<input id='nb_entr_"+ nb_entrees+"' name='nb_entr' value='"+nb_entrees+"' type='hidden'>");
    });
</script>
<script type="text/javascript" src="refresh.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/active.js"></script>
</body>
</html>