<html>
        <head>
            <title>WebLibrairie</title>
            <link href="Descriptif.css" rel="stylesheet"/>
            <?php 
                include_once('Fonctions.php');
            ?>
        </head>
        <body>
            <form method="post" action="">
                <a href="AccueilC.php"><h1>Web Librairie</h1></a>
                <input class="rechercheT" type="text" name="rechercheT" placeholder="Titre" />
                <input class="btnRechercher" type="submit" name="rechercher" value="Rechercher"/>
                <a href="Panier.php"><input class="btnPanier" type="button" name="panier" value="Mon Panier" /></a>
                <?php if(isset($_POST['rechercher'])):?>
                    <?php $_SESSION['titre'] = $_POST['rechercheT']; ?>
                    <?php header("Location:RechercheTitre.php");?>
                <?php endif; ?>
            </form>
            <form method="post" action="">
                <?php $des = descriptifLivre();?>
                <?php foreach($des as $data):?>
                    <div class="corp">
                        <p class="nom"><?= $data['nom'];?>  <?= $data['prenom'];?></p>
                        <p class="titre"><?= $data['titre'];?></p>
                        <div class="diresumer">
                            <p class="resumer"><?= $data['resumer'];?></p>
                        </div>
                        <h2>Le Résumé</h2>
                        <img src="<?php echo $data['image'];?>"/>
                        <input class="btnAjouter" type="submit" name="btnAjouter" value="Ajouter au Panier"/>
                        <p class="genre">Genre: <?= $data['genre'];?></p>
                        <p class="prix">Prix: <?= $data['PU'];?>0 €</p>
                    </div>  
                <?php endforeach; ?>
            </form>
            <?php if(isset($_POST['btnAjouter'])):?>
                    <?php echo "<script>alert('Ajouter au Panier');</script>";?>
            <?php endif; ?>
        </body>
    </html>