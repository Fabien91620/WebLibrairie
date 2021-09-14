<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>WebLibrairie | FAQ</title>
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
											<li><a href="shop-grid.php?categorie=Roman">Roman</a></li>
											<li><a href="shop-grid.php?categorie=Jeunesse">Jeunesse </a></li>
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
								<li class="drop"><a href="shop-grid.php?categorie=BD">Enfants</a>
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
								<li><a href="contact.php">Contact</a></li>
								<li class="drop"><a href="faq.html">FAQ</a></li>

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
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                        	<h2 class="bradcaump-title">Faq</h2>
                            <nav class="bradcaump-content">
                              <a class="breadcrumb_item" href="index.php">Accueil</a>
                              <span class="brd-separetor">/</span>
                              <span class="breadcrumb_item active">FAQ</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
		<!-- Start Faq Area -->
		<section class="wn__faq__area bg--white pt--80 pb--60">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="wn__accordeion__content">
							<h2>Vous trouverez ci-dessous les questions posées fréquemment</h2>
							<p>Si vous ne trouvez pas réponse à vos questions veuillez nous contacter sur la page contact.</p>
						</div>
						<div id="accordion" class="wn_accordion" role="tablist">
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingOne">
						          	<h5>
						                <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">Quels sont les délais de livraison ?</a>
						          	</h5>
						        </div>
						        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
					            	<div class="card-body">Pour l'instant les délais de livraison sont de 5 jours ouvrés</div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingTwo">
						          	<h5>
							            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Frais de livraison</a>
						          	</h5>
						        </div>
						        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
					          		<div class="card-body">On essaye de les baisser au maximum ils sont de 5€ pour l'instant</div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingThree">
						          	<h5>
							            <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Quelles sont les compagnies de livraison partenaire ?</a>
						          	</h5>
						        </div>
						        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
					          		<div class="card-body">Nous sommes en partenariat avec colissimo ainsi que chrono drive.</div>
						        </div>
						    </div>
						    <div class="card">
						        <div class="acc-header" role="tab" id="headingFour">
						          	<h5>
							            <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Quels sont les moyens de paiement</p></a>
						          	</h5>
						        </div>
						        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
					          		<div class="card-body">Les moyens de payement sont Paypal, MasterCard, Visa et Cirrus</div>
						        </div>
						    </div>
						</div>
					</div> 
				</div> 
			</div> 
		</section>
		<!-- End Faq Area -->
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
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
	
</body>
</html>