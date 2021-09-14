<html>
    <head>
        <?php include_once('Fonctions.php'); ?>
    </head>
    <body>
        <?php $success = suppressionArticle(); 
            if($success){
                header("Location:Panier.php");
            }
        ?>
    </body>
</html>