<html>
    <head>
        <title>WebLibrairie</title>
        <link href="CSS/Inscription.css" rel="stylesheet"/>
        <link href="CSS/Accueil.css" rel="stylesheet"/>
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
        <?php if(isset($_POST['inscrip'])): ?>
             <?php $success = inscriptionClient();?>
                <?php if($success): ?>
                    <?php $conn = connectClientParametre($_SESSION['EmailCompte'], $_SESSION['MdpCompte']); ?>
                    <?php if($conn): ?>
                        <?php header('Location:Accueil.php'); ?>
                    <?php endif; ?>
                <?php else: ?>
                    <?php echo "<p>User déja connue</p>"; ?>
                <?php endif; ?>
        <?php endif; ?>
        <div class="container">
            <form method="post" action="">
                <div class="inscipchamp">
                    <h2>Inscrivez-vous</h2>
                    <p>*champs obligatoires</p>
                </div>
                <div class="email">
                    <label>Email</label>
                    <span>*</span><br/>
                    <input type="email" name="email" required/>
                </div>
                <div class="dmdp">
                     <div class="mdp">
                        <label>Mot de passe</label>
                        <span>*</span><br/>
                        <input type="password" name="mdp" required/>
                     </div>
                     <div class="mdpc">
                         <label>Confirmation du mot de passe</label>
                        <span>*</span><br/>
                        <input type="password" name="mdpc" required/>
                     </div>
                </div>
                <div class="prenom">
                    <label>Prénom</label>
                    <span>*</span><br/>
                    <input type="text" name="prenom" required/>
                </div>
                <div class="nom">
                    <label>Nom</label>
                    <span>*</span><br/>
                    <input type="text" name="nom" required/>
                </div>
                <div class="user">
                    <label>User</label>
                    <span>*</span><br/>
                    <input type="text" name="user" required/>
                </div>
                <div class="num">
                    <div class="mobile">
                        <label>Mobile</label><br/>
                        <input type="tel" name="mobile"/>
                    </div>
                    <div class="fixe">
                        <label>Téléphone fixe</label><br/>
                        <input type="tel" name="fixe"/>
                    </div>
                </div>
                <input class="btnSub" name="inscrip" type="submit" value="Valider votre inscription"/>
            </form>
        </div>
        <div class="faq">
            <h2>FAQ</h2>
            <p>N'hésitez pas à consulter nos FAQ vous y trouverez peut-être la réponse à votre question. Sinon, laissez-nous un message sur ce  formulaire.
                Consulter nos FAQ
            </p>
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
        <div id="Iscription" class="modal">
            <div class="modal-content">
                <span id="spanc" class="close">&times;</span>
                <form method="post" action="">
                    <div class="premierevisite">
                        <h3>Veuillez vous connecter</h3>
                        <hr/>
                    </div>
                    <div class="connectionvisite">
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
                    <input id="btnCo" class="btnConnec" type="submit" name="connection" value="Se connecter"/>
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
        <script>
            $(function(){
                //Ouvrir la pop up Connection
                $("#Iscription").dialog({
                    minHeight: 'auto',
                    autoOpen: false,
                    draggable: false,
                    modal: true,
                    resizable: false,
                    dialogClass: 'dialog-connect',
                });
            });
        </script>
    </body>
</html>