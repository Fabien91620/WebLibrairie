<html>
    <head>
        <title>WebLibrairie</title>
        <link href="CSS/Accueil.css" rel="stylesheet"/>
        <link href="CSS/MesCommandes.css" rel="stylesheet"/>
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
                <a id="Connec"><img src="assets/Background/IconeConnection.png"><p> Me connecter</p></a><br/>
                <?php endif; ?>
                <?php if(isset($_SESSION['con'])): ?>
                <a class="LienConnect" href="Profil.php"><img src="assets/Background/IconeConnection.png"><p><?= $_SESSION['Usercompte']; ?></p><br/></a>
                <?php endif; ?>
                <a class="LienPanier" href="Panier.php"><img src="assets/Background/IconePanier.png"><p> Panier</p></a>
            </div>
        </div>
        <div class="container">
            <div class="TitreCommande">
            <h2>Mes commandes</h2>
            <hr/>
            </div>
            <div class="MesCommande">
                <?php $commande = mesCommande(); ?>
                <?php foreach($commande as $data): ?>
                    <a href="DescriptionPanier.php?panier=<?php echo $data['ID'] ?>"><p>Commande du <?php echo $data['date']; ?></p></a>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>