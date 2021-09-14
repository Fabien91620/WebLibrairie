<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WebLibrairie | Retour</title>
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
    <div class="ht__bradcaump__area bg-image--6" style="padding-top: 45px; padding-bottom: 45px;"></div>
    <!-- End Bradcaump area -->
    <!-- Start My Account Area -->
    <?php $link = connectDB(); ?>
    <?php $retour = getRetourClientDetail(); ?>
    <?php foreach ($retour as $data):?>
        <section class="wn_contact_area bg--white pt--80 pb--80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="contact-form-wrap">
                            <h2 class="contact__title"><?= $data['SUJET']; ?></h2>
                            <div class="single-contact-form space-between">
                                <input type="text" id="prenom" name="prenom" value="<?= $data['PRENOM']; ?>" disabled>
                                <input type="text" id="nom" name="nom" value="<?= $data['NOM']; ?>" disabled>
                            </div>
                            <div class="single-contact-form space-between">
                                <input type="email" id="mail" name="mail" value="<?= $data['MAIL']; ?>" disabled>
                            </div>
                            <div class="single-contact-form message">
                                <textarea name="message" id="message" disabled><?= $data['MESSAGE']; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach; ?>
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
<script type="text/javascript" src="refresh.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/active.js"></script>
</body>
</html>