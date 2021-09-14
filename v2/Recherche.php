<html>
        <head>
            <title>WebLibrairie</title>
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
                    <a class="LienConnect" href="Profil.php"><img src="assets/Background/IconeConnection.png"><p><?= $_SESSION['Usercompte']; ?></p><br/></a>
                    <?php endif; ?>
                    <a class="LienPanier" href=""><img src="assets/Background/IconePanier.png"><p> Panier</p></a>
                </div>
            </div>
            <div class="roman">
                <div class="h1Pa">
                    <h1>Résultat de la recherche</h1><hr/>
                    <?php echo $_SESSION['titre']; ?>
                </div>
                <form method="post" action="">
                    <?php $livre = recherche(); ?>
                    <?php foreach($livre as $data): ?>
                        <a href="Descriptif.php?oeuvre=<?php echo $data['ID'] ?>">
                            <ul class="ListeLivre">
                                <li class="liLivre">
                                    <div class="fiche">
                                        <div class="image">
                                            <a href="Descriptif.php?oeuvre=<?php echo $data['ID'] ?>"><img src="<?php echo $data['IMAGE'];?>"/></a>
                                        </div>
                                        <div class="info">
                                            <h3><a href="Descriptif.php?oeuvre=<?php echo $data['ID'] ?>"><p><?= $data['TITRE'];?></p></a></h3>
                                            <div class="auteur"><?= $data['NOM'];?>  <?= $data['PRENOM'];?></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </a>
                    <?php endforeach; ?>
                </form>
            </div>
        </body>
    </html>