<html>
        <head>
            <title>WebLibrairie</title>
            <link href="CSS/Descriptif.css" rel="stylesheet"/>
            <link href="CSS/Accueil.css" rel="stylesheet"/>
            <?php include_once('Fonctions.php'); ?>
        </head>
        <body class="bodya">
            <div class="bande"></div>
            <div class="top">
                <div class="topD">
                    <form method="post" action="">
                        <a href="Accueil.php"><h1 class="titreh1">WebLibrairie</h1></a>
                        <input class="Recherche" type="text" placeholder="Les Misérables"/>
                        <input class="btnRecherche" type="submit" value="" name="recherche"/>
                    </form>
                </div>
                <div class="topBtn">
                    <?php if(!isset($_SESSION['con'])): ?>
                    <a class="LienConnect" href="Authentification.php"><img src="assets/Background/IconeConnection.png"><p> Me connecter</p></a><br/>
                    <?php endif; ?>
                    <?php if(isset($_SESSION['con'])): ?>
                    <a class="LienConnect" href="Profil.php"><img src="assets/Background/IconeConnection.png"><p><?= $_SESSION['Usercompte']; ?></p><br/></a>
                    <?php endif; ?>
                    <a class="LienPanier" href="Panier.php"><img src="assets/Background/IconePanier.png"><p> Panier</p></a>
                </div>
            </div>
            <form method="post" action="">
                <?php $des = descriptifLivre();?>
                <?php foreach($des as $data):?>
                    <div class="corp">
                        <?php $_SESSION['IdLivre'] = $data['ID']; ?>
                        <p class="nom"><?= $data['NOM'];?>  <?= $data['PRENOM'];?></p>
                        <p class="titre"><?= $data['TITRE'];?></p>
                        <div class="diresumer">
                            <p class="resumer"><?= $data['RESUME'];?></p>
                        </div>
                        <h2>Le Résumé</h2>
                        <img src="<?php echo $data['IMAGE'];?>"/>
                        <p class="genre">Genre: <?= $data['LIBELLE'];?></p>
                        <p class="prix">Prix: <?= $data['PRIX_UNITAIRE'];?>0 €</p>
                        <input class="btnAjouter" type="submit" name="btnAjouter" value="Ajouter au Panier"/>
                    </div>
                <?php endforeach; ?>
                <?php if(isset($_POST['btnAjouter'])): ?>
                    <?php $success = AjouterArticle($_SESSION['IdLivre']); ?>
                    <?php if($success): ?>
                        <?php echo "<script>alert('Ajouter au Panier');</script>"; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </form>
    </body>
</html>