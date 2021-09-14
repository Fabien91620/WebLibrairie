<html>
        <head>
            <title>WebLibrairie|Panier</title>
            <link href="Accueil.css" rel="stylesheet"/>
            <?php 
                include_once('Fonctions.php');
            ?>
        </head>
        <body>
            <form class="corpPage" method="post" action="">
                <a href="AccueilC.php"><h1>Web Librairie</h1></a>
                <input class="rechercheT" type="text" name="rechercheT" placeholder="Titre" />
                <input class="btnRechercher" type="submit" name="rechercher" value="Rechercher"/>
            </form>
            <?php if(isset($_POST['rechercher'])):?>
                    <?php $_SESSION['titre'] = $_POST['rechercheT']; ?>
                    <?php header("Location:RechercheTitre.php");?>
            <?php endif; ?>
        </body>
    </html>