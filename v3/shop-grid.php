<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>WebLibrairie | <?php echo $_GET['categorie']; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
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
        <div class="ht__bradcaump__area bg-image--5" style="padding-top: 45px; padding-bottom: 45px;"></div>
        <!-- End Bradcaump area -->
        <!-- Start Shop Page -->
        <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
        				<div class="shop__sidebar">
        					<aside class="wedget__categories poroduct--cat">
        						<h3 class="wedget__title">Catégorie</h3>
        						<ul>
                                    <?php $genreLivre = getGenre(); ?>
                                    <?php $compteur = 0; ?>
                                    <?php foreach($genreLivre as $data): ?>
                                        <?php if($compteur < 10): ?>
                                            <?php $compteur++; ?>
                                            <li><a href="shop-grid.php?categorie=<?php echo $data['LIBELLE'];  ?>"><?php echo $data['LIBELLE']; ?><span>(<?php echo $data['nb']; ?>)</span></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
        						</ul>
        					</aside>
        					<aside class="wedget__categories poroduct--tag">
        						<h3 class="wedget__title">Tags</h3>
        						<ul>
                                    <?php $genreLivre = getGenre(); ?>
                                    <?php $compteur = 0; ?>
                                    <?php foreach($genreLivre as $data): ?>
                                        <?php if($compteur < 20): ?>
                                            <?php $compteur++; ?>
                                            <li><a href="shop-grid.php?categorie=<?php echo $data['LIBELLE'];  ?>"><?php echo $data['LIBELLE']; ?></a></li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
        						</ul>
        					</aside>
        				</div>
        			</div>
        			<div class="col-lg-9 col-12 order-1 order-lg-2">
        				<div class="row">
        					<div class="col-lg-12">
								<div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
									<div class="shop__list nav justify-content-center" role="tablist">
			                            <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
			                            <a class="nav-item nav-link" data-toggle="tab" href="#nav-list" role="tab"><i class="fa fa-list"></i></a>
			                        </div>
                                    <?php $link = connectDB();
                                        $genre = $_GET['categorie'];
                                        if ($genre == 'Best'){
                                            $reqNb = $link->query('SELECT COUNT(*) FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID INNER join GENRE_LIVRE on LIVRE.ID = GENRE_LIVRE.ID_LIVRE inner join GENRE on GENRE_LIVRE.ID_GENRE = GENRE.ID  WHERE IMAGE_LIVRE.FORMAT = "270x340" AND LIVRE.BEST_SELLER = "1" ORDER BY DT_PARUTION DESC');
                                        }
                                        elseif ($genre == 'Tout'){
                                            $reqNb = $link->query('SELECT COUNT(*) FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID INNER join GENRE_LIVRE on LIVRE.ID = GENRE_LIVRE.ID_LIVRE inner join GENRE on GENRE_LIVRE.ID_GENRE = GENRE.ID  WHERE IMAGE_LIVRE.FORMAT = "270x340" ORDER BY DT_PARUTION DESC');
                                        }
                                        else {
                                            $reqNb = $link->query('SELECT COUNT(*) FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID INNER join GENRE_LIVRE on LIVRE.ID = GENRE_LIVRE.ID_LIVRE inner join GENRE on GENRE_LIVRE.ID_GENRE = GENRE.ID  WHERE IMAGE_LIVRE.FORMAT = "270x340" AND GENRE.LIBELLE = "' . $genre . '" ORDER BY DT_PARUTION DESC');
                                        }
                                        $nbTotal = $reqNb->fetch();
                                    ?>
			                        <p>Afficher 1–<?php if($nbTotal[0] > 12){ echo '12';}else{ echo $nbTotal[0]; } ?> sur <?= $nbTotal[0]; ?> resultas</p>
			                        <div class="orderby__wrapper">

			                        </div>
		                        </div>
        					</div>
        				</div>
        				<div class="tab__container">
	        				<div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
	        					<div class="row">
	        						<!-- Start Single Product -->
                                    <?php $compteur = 0; ?>
                                    <?php $livre = getLivre270x340G(); ?>
                                    <?php foreach($livre as $data): ?>
                                        <?php $compteur++; ?>
		        					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
			        					<div class="product__thumb">
											<a class="first__img" href="single-product.php?livre=<?php echo $data['ID'] ?>"><img src="<?php echo $data['SOURCE'];?>" alt="product image"></a>
                                            <?php if($data['BEST_SELLER'] == 1): ?>
                                                <div class="hot__box">
                                                    <span class="hot-label">BEST SALLER</span>
                                                </div>
                                            <?php endif; ?>
                                            <?php if($data['COEUR'] == 1): ?>
                                                <div class="hot__box">
                                                    <span class="hot-label">Coup de coeur</span>
                                                </div>
                                            <?php endif; ?>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.php?livre=<?php echo $data['ID'] ?>"><?= $data['TITRE'];?></a></h4>
											<ul class="prize d-flex">
												<li><?= $data['PRIX_UNITAIRE'];?>0 €</li>
											</ul>
                                            <div class="action">
                                                <div class="actions_inner" style="margin-top: -5%;">
                                                    <ul class="add_to_links">
                                                        <?php if(isset($_SESSION['Usercompte'])): ?>
                                                            <li><a id="icoPanier_<?php echo $compteur; ?>" onclick="ajouterPanier(<?php echo $data['ID']; ?>, <?php echo $_SESSION['IdPanier']; ?>, 'icoPanier_<?php echo $compteur; ?>');" class="cart" ><i class="bi bi-shopping-bag4"></i></a></li>
                                                            <li><a id="icoWishlist_<?php echo $compteur; ?>" onclick="ajouterWish(<?php echo $data['ID']; ?>, <?php echo $_SESSION['IdWishList']; ?>, 'icoWishlist_<?php echo $compteur; ?>');" class="wishlist" ><i class="bi bi-heart-beat"></i></a></li>
                                                        <?php else: ?>
                                                            <li><a id="icoPanierD_<?php echo $compteur; ?>" class="cart" href="my-account.php"><i class="bi bi-shopping-bag4"></i></a></li>
                                                            <li><a id="icoWishlistD_<?php echo $compteur; ?>" class="wishlist" href="my-account.php"><i class="bi bi-heart-beat"></i></a></li>
                                                        <?php endif; ?>
                                                    </ul>
                                                </div>
                                            </div>
										</div>
		        					</div>
                                    <?php endforeach; ?>
	        					</div>
	        					<ul class="wn__pagination">
	        						<li class="active"><a href="#">1</a></li>
	        					</ul>
	        				</div>
	        				<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
	        					<div class="list__view__wrapper">
	        						<!-- Start Single Product -->
                                    <?php $compteur = 0; ?>
                                    <?php $livre = getLivre450x565G(); ?>
                                    <?php foreach($livre as $data): ?>
                                        <?php $compteur++; ?>
                                        <div class="list__view">
                                            <div class="thumb">
                                                <a class="first__img" href="single-product.php?livre=<?php echo $data['ID'] ?>"><img src="<?php echo $data['SOURCE'];?>" alt="product image"></a>
                                            </div>
                                            <div class="content" style="height: 350px;">
                                                <h2><a href="single-product.php?livre=<?php echo $data['ID'] ?>"><?= $data['TITRE'];?></a></h2>
                                                <ul class="prize__box">
                                                    <li><?= $data['PRIX_UNITAIRE'];?>0 €</li>
                                                </ul>
                                                <p style="height: 20%; overflow: auto;"><?= $data['RESUME'];?></p>
                                                <ul class="cart__action d-flex">
                                                    <?php if(isset($_SESSION['Usercompte'])): ?>
                                                        <li class="cart" ><a id="icoPanier1_<?php echo $compteur; ?>" onclick="ajouterPanier(<?php echo $data['ID']; ?>, <?php echo $_SESSION['IdPanier']; ?>, 'icoPanier1_<?php echo $compteur; ?>');" >Ajouter au panier</a></li>
                                                        <li  class="wishlist"><a id="icoWishlist1_<?php echo $compteur; ?>" onclick="ajouterWish(<?php echo $data['ID']; ?>, <?php echo $_SESSION['IdWishList']; ?>, 'icoWishlist1_<?php echo $compteur; ?>');"></a></li>
                                                    <?php else: ?>
                                                        <li class="cart" ><a id="icoPanier_<?php echo $compteur; ?>" href="my-account.php" >Ajouter au panier</a></li>
                                                        <li class="wishlist" ><a id="icoWishlistD_<?php echo $compteur; ?>" href="my-account.php"></a></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
	        						<!-- End Single Product -->
	        					</div>
	        				</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- End Shop Page -->
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
        function ajouterWish(idLivre, idWishlist, idBtn){
            $.ajax({
                url : 'Ajax/ajaxAjouterLivreWishlist.php',
                type : 'POST',
                data : 'idLivre=' + idLivre +'&idWishlist=' + idWishlist,
                dataType : 'html',
                success : function(code_html, statut){

                }
            });
            $( "#"+idBtn).parent()
                .click(function() {
                    $(this)
                        .css({
                            position:'fixed',
                            top: $(this).offset().top - '500px'
                        })
                        .animate({
                            left: '2000px',
                            top:"0",

                        });
                });
        }
        function ajouterPanier(idLivre, idPanier, idBtn){
            var nb = 1;
            $.ajax({
                url : 'Ajax/ajaxAjouterLivrePanier.php',
                type : 'POST',
                data : 'idLivre=' + idLivre + '&idPanier=' + idPanier + '&qty=' + nb,
                dataType : 'html',
                success : function(code_html, statut){

                }
            });
            $( "#"+idBtn).parent()
                .click(function() {
                    $(this)
                        .css({
                            position:'fixed',
                            top: $(this).offset().top - '500px'
                        })
                        .animate({
                            left: '2000px',
                            top:"0",

                        });
                });
        }
    </script>
    <script type="text/javascript" src="refresh.js"></script>
		<script src="js/vendor/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/active.js"></script>
		
	</body>
	</html>