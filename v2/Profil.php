<html>
    <head>
        <title>WebLibrairie</title>
        <link href="CSS/Profil.css" rel="stylesheet"/>
        <link href="CSS/Accueil.css" rel="stylesheet"/>
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
            <?php if($_SESSION['Typecompte'] == "ADM"): ?>
                <div class="TableauDiv">
                    <a href="MesCommandes.php"><div class="Commande">
                        <h2>Vos commandes</h2>
                        <p>Consulter vos commande</p>
                    </div></a>
                    <a href="ModificationCompte.php"><div class="Connexion">
                        <h2>Connexion et paramètres de sécurité</h2>
                        <p>Modifier l'identifiant, le nom, le numéro de téléphone mobile et l'adresse de livraison</p>
                    </div></a>
                    <a href="Administration.php"><div class="Admin">
                        <h2>Administrateur</h2>
                        <p>Ajouter des articles</p>
                    </div></a>
                </div>
            <?php else: ?>
                <div class="TableauDiv2">
                    <a href="MesCommandes.php"><div class="Commande2">
                        <h2>Vos commandes</h2>
                        <p>Consulter vos commande</p>
                    </div></a>
                    <a href="ModificationCompte.php"><div class="Connexion2">
                        <h2>Connexion et paramètres de sécurité</h2>
                        <p>Modifier l'identifiant, le nom, le numéro de téléphone mobile et l'adresse de livraison</p>
                    </div></a>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>