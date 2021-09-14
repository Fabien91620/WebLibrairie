<html>
    <head>
        <?php include_once('Fonctions.php'); ?>
    </head>
    <body>
        <?php $success = recommanderArticle(); 
            if($success){
                header("Location:Panier.php");
            }
        ?>
    </body>
</html>