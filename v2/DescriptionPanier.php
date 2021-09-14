<html>
    <head>
        <title>WebLibrairie</title>
        <link href="CSS/Accueil.css" rel="stylesheet"/>
        <link href="CSS/DescriptionPanier.css" rel="stylesheet"/>
        <?php include_once('Fonctions.php'); ?>
    </head>
    <body class="bodya">
        <div class="bande"></div>
        <div class="top">
            <div class="topD">
                <form method="post" action="">
                    <a href="Accueil.php"><h1 class="titreh1">WebLibrairie</h1></a>
                    <input class="Recherche" type="text" placeholder="Les Misérables" name="recherche"/>
                    <input class="btnRecherche" type="submit" value="" name="rechercher"/>
                    <?php if(isset($_POST['rechercher'])):?>
                    <?php $_SESSION['titre'] = $_POST['recherche']; ?>
                    <?php header("Location:Recherche.php");?>
                    <?php endif; ?>
                </form>
            </div>
            <div class="topBtn">
                <?php if(!isset($_SESSION['con'])): ?>
                <a class="LienConnect" href="Authentification.php"><img src="assets/Background/IconeConnection.png"><p> Me connecter</p></a><br/>
                <?php endif; ?>
                <?php if(isset($_SESSION['con'])): ?>
                <a class="LienConnect" href="Deconnexion.php"><img src="assets/Background/IconeConnection.png"><p>Déconnection</p><br/></a>
                <?php endif; ?>
                <a class="LienPanier" href="Panier.php"><img src="assets/Background/IconePanier.png"><p> Panier</p></a>
            </div>
        </div>
        <div class="container">
            <div class="titreCommande">
            <h2>Mes Articles</h2>
            <hr/>
            </div>
            <div class="tableauArticle">
                <?php $recup = recupPanier(); ?>
                <?php foreach($recup as $data): ?>
                    <div class="article">
                        <img src="<?php echo $data['IMAGE'];?>"/>
                        <p class="quantite">Quantité: <?php echo $data['NB_PRODUIT']; ?></p>
                        <a class="titre" href="Descriptif.php?oeuvre=<?php echo $data['ID'] ?>"><p><?php echo $data['TITRE'];?></p></a>
                        <a href="Recommander.php?recommande=<?php echo $data['ID']?>&panier=<?php echo $_GET['panier'] ?>"><input class="btnRecommande" type="button" name="Recommander" value="Recommander"/></a>
                        <p class="prix">EUR <?php echo $data['PRIX_UNITAIRE'];?>0</p>
                    </div>
                <hr>
                <?php endforeach; ?>
                <?php $prixTotal = afficherPrixTotalPanier(); ?>
                <?php foreach($prixTotal as $data): ?>
                    <?php if($data['PRIX_TOTAL'] == null): ?>
                        <p class="soustotal">Sous-total : <?php echo 0;?> €</p>
                    <?php else: ?>
                        <p class="soustotal">Sous-total : <?php echo $data['PRIX_TOTAL'];?> €</p>
                    <?php endif; ?>
                    <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>