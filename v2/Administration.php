<html>
    <head>
        <title>WebLibrairie</title>
        <link href="CSS/Administration.css" rel="stylesheet"/>
        <link href="CSS/Accueil.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
            <div class="TableauDiv">
                <div class="Ajouter">
                    <h2>Ajouter un article</h2>
                    <p>Ajouter les articles un par un</p>
                </div>
                <form id="import_csv" method="post" enctype="multipart/form-data">
                <div class="Importer">
                    <h2>Importer article</h2>
                    <p>Importer un fichier .csv contenant des articles</p>
                    <input class="inputFile" type="file" name="article"/>
                    <input class="importbtn" type="submit" name="import" id="import" value="Importer"/>
                </div>
                </form>
                <a href="Export.php"><div class="Expoter">
                    <h2>Exporter</h2>
                    <p>Exporter tout les articles contenue dans la base de donnée en fichier .csv</p>
                </div></a>
                <div class="GestionCompte">
                    <h2>Gestion des comptes</h2>
                    <p>Permet de visionner/modifier les informations d'un utilisateur</p>
                </div>
                <div class="Statistique">
                    <h2>Statistique</h2>
                    <p>Permet de visionner les statistiques du site</p>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function(){
        $('#import_csv').on('submit', function(e){
            e.preventDefault();
            $.ajax({
               url:"Import.php",
                method:"POST",
                data:new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data){
                    if(data == 'Error1'){
                        alert("Fichier invalide");
                    }
                    else if(data == "Error2"){
                        alert("Merci de sélectionner un fichier");
                    }
                    else{
                        alert("Impotation réussite");
                    }
                }
            });
        });
    });
</script>