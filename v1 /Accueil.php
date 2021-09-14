<html>
        <head>
            <title>WebLibrairie</title>
            <link href="Accueil.css" rel="stylesheet"/>
            <?php 
                include_once('Fonctions.php');
            ?>
        </head>
        <body>
            <form class="menu" method="get" action="">
                <div class='auteur'>
                    <p class="titreAuteur">les Auteurs</p>
                    <?php $auteur = getAuteur();?>
                    <?php foreach($auteur as $data):?>     
                            <a href="RechercheAuteur.php?auteur=<?php echo $data['id'] ?>"><?= $data['prenom']." ".$data['nom']?></a><br><br>
                    <?php endforeach; ?>
                </div>
            </form>
            <form class="corpPage" method="post" action="">
                <?php if($_SESSION):?>
                    <a href="AccueilC.php"><h1>Web Librairie</h1></a>
                <?php else:?>
                    <a href="Accueil.php"><h1>Web Librairie</h1></a>
                <?php endif; ?>
                <input class="rechercheT" type="text" name="rechercheT" placeholder="Titre" />
                <input class="btnRechercher" type="submit" name="rechercher" value="Rechercher"/>
                <a href="Authentification.php"><input class="btnConnexion" type="button" name="connexion" value="Connexion" /></a>
                <?php $accueil = getTitre();?>
                <?php foreach($accueil as $data):?>
                    <div class="caseLivre">
                        <p><?= $data['nom'];?>  <?= $data['prenom'];?></p>
                        <p><?= $data['titre'];?></p>
                        <hr />
                        <img src="<?php echo $data['image'];?>"/>
                    </div>
                <?php endforeach; ?>
                <?php if(isset($_POST['rechercher'])):?>
                        <?php $_SESSION['titre'] = $_POST['rechercheT']; ?>
                        <?php header("Location:RechercheTitre.php");?>
                <?php endif; ?>
            </form>
        </body>
    </html>