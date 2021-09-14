<html>
    <head>
        <title>WebLibrairie</title>
        <link href="CSS/Accueil.css" rel="stylesheet"/>
        <link href="CSS/Panier.css" rel="stylesheet"/>
        <?php include_once('Fonctions.php'); ?>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
            <?php if(!isset($_SESSION['Usercompte'])): ?>
                <p class="ErreurCon">Veuillez vous connecter ou vous inscrire pour avoir accès au panier</p>
            <?php else: ?>
                <div class="titrePanier">
                    <h2>Mon panier</h2>
                    <p>Prix</p>
                    <hr>
                </div>
                <div class="tableauPanier">
                    <form method="post">
                        <?php $article = afficherPanier(); ?>
                        <?php foreach($article as $data): ?>
                                    <div class="article">
                                        <img src="<?php echo $data['IMAGE'];?>"/>
                                        <p class="quantite">Quantité:
                                            <select name="thelist" onChange="combo(this, 'theinput')">
                                                <?php $i= $data['NB_PRODUIT']; ?>
                                                <?php if($data['NB_PRODUIT'] == 2): ?>
                                                        <option><?php echo $data['NB_PRODUIT']; ?></option>
                                                        <option>1</option>
                                                <?php endif; ?>
                                                <?php if($data['NB_PRODUIT'] == 3): ?>
                                                        <option><?php echo $data['NB_PRODUIT']; ?></option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                <?php endif; ?>
                                                <?php if($data['NB_PRODUIT'] == 4): ?>
                                                        <option><?php echo $data['NB_PRODUIT']; ?></option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                <?php endif; ?>
                                                <?php while($i<11): ?>
                                                    <option><?php echo $i; ?></option>
                                                    <?php $i++; ?>
                                                <?php endwhile; ?>
                                        </select>
</p>
                                        <input class="idCacher" type="hidden" name="id" value="<?php echo $data['ID'] ?>">
                                         <a class="titre" href="Descriptif.php?oeuvre=<?php echo $data['ID'] ?>"><p><?php echo $data['TITRE'];?></p></a>
                                        <a href="SuppressionArticle.php?supp=<?php echo $data['ID']?>"><input class="btnSupp" type="button" name="supprimer" value="Supprimer"/></a>
                                        <p class="prix">EUR <?php echo $data['PRIX_UNITAIRE'];?>0</p>
                                    </div>
                                <hr>
                        <?php endforeach; ?>
                        <?php $prixTotal = afficherPrixTotal(); ?>
                        <?php foreach($prixTotal as $data): ?>
                            <?php if($data['PRIX_TOTAL'] == null): ?>
                                <p class="soustotal">Sous-total : <?php echo 0;?> €</p>
                            <?php else: ?>
                                <p class="soustotal">Sous-total : <?php echo $data['PRIX_TOTAL'];?> €</p>
                            <?php endif; ?>
                            <?php endforeach; ?>

                        <input class="btnCommander" type="submit" name="commande" value="Passer la commande"/>
                        <?php if(isset($_POST['commande'])): ?>
                            <?php echo "<script>alert('Commande validée');</script>"; ?>
                            <?php quantitePanier(); ?>
                            <?php PasserCommande(); ?>
                            <?php endif; ?>
                    </form>
                </div>
            <?php endif; ?>
        </div>
        <div id="Connection" class="modal">
            <div class="modal-content">
                <span id="spanc" class="close">&times;</span>
                <form method="post" action="">
                    <div class="premierevisite">
                        <h3>Première visite ? </h3>
                        <a href="Inscription.php"><input type="button" name="enregister" value="S'inscrire"/></a>
                        <hr/>
                    </div>
                    <div class="connectionvisite">
                        <h3>On se connait déjà ?</h3>
                        <p><label for="users">Votre Email</label></p>
                        <input type="email" name="Email" placeholder="abc@weblibrairie.fr" required/>
                        <p><label for="mdp">Votre mot de passe</label></p>
                        <input id="mdp" type="password" name="mdp" placeholder="Mot de passe" required/>
                    </div>
                    <p class="Erreur">
                            <?php 
                                if(isset($_POST['connection'])){
                                    if(connectClient()==true){
                                        $_SESSION['con'] = 1;
                                    }
                                    else{
                                        echo "Mot de passe ou email incorrecte";
                                    }
                                }
                            ?>
                        </p>
                    <input class="btnConnec" type="submit" name="connection" value="Se connecter"/>
                    </form>
                </div>
            </div>
        <script>
            $(function(){
                //Ouvrir la pop up Connection
                $("#Connection").dialog({
                    minHeight: 'auto',
                    autoOpen: false,
                    draggable: false,
                    modal: true,
                    resizable: false,
                    dialogClass: 'dialog-connect',
                });
                
                $("#Connec").button();
                $("#Connec").click(function(event){
                    if ($("#Connection").dialog("isOpen") === true) {
                       $("#Connection").dialog("close");
                     } else {
                       $("#Connection").dialog("open");
                     }
                });
            });
        </script>
    </body>
</html>