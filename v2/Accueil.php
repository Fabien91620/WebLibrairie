<html>
    <head>
        <title>WebLibrairie</title>
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
        <div class="container">
            <div class="roman">
                <div class="h1Pa">
                    <a href=""><h1>Dernières parutions Roman</h1></a><hr/>
                </div>
                <div class="slider">
                    <?php $livre = getLivre(); ?>
                    <?php $compteur = 0; ?>
                    <?php foreach($livre as $data): ?>
                    <?php $link = connectDB();
                        $req = $link->query("SELECT GENRE.LIBELLE FROM GENRE INNER JOIN GENRE_LIVRE ON GENRE.ID = GENRE_LIVRE.ID_GENRE INNER JOIN LIVRE ON GENRE_LIVRE.ID_LIVRE = LIVRE.ID WHERE ID_LIVRE = ".$data['ID']."");
                        $result = $req->fetch();
                        if($result[0] == 'Roman'):?>
                            <?php if($compteur < 4): ?>
                                <?php $compteur++; ?>
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
                                                    <br>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </a>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="roman">
                <div class="h1Bd">
                    <a href="Recherche.php" ><h1>Dernières parutions Bandes dessinées, Mangas</h1></a><hr/>
                </div>
                <div class="slider">
                    <?php $livre = getLivre(); ?>
                    <?php $compteur = 0; ?>
                    <?php foreach($livre as $data): ?>
                        <?php $link = connectDB();
                                $req = $link->query("SELECT GENRE.LIBELLE FROM GENRE INNER JOIN GENRE_LIVRE ON GENRE.ID = GENRE_LIVRE.ID_GENRE INNER JOIN LIVRE ON GENRE_LIVRE.ID_LIVRE = LIVRE.ID WHERE ID_LIVRE = ".$data['ID']."");
                                $result = $req->fetch();
                                if($result[0] == 'Bd'):?>
                                    <?php if($compteur < 4): ?>
                                        <?php $compteur++; ?>
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
                                                            <br>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </a>
                                <?php endif; ?>
                            <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="roman">
                <div class="h1Bd">
                    <a href="Recherche.php" ><h1>Dernières parutions Loisirs, Distractions</h1></a><hr/>
                </div>
                <div class="slider">
                    <?php $livre = getLivre(); ?>
                    <?php $compteur = 0; ?>
                    <?php foreach($livre as $data): ?>
                        <?php $link = connectDB();
                                $req = $link->query("SELECT GENRE.LIBELLE FROM GENRE INNER JOIN GENRE_LIVRE ON GENRE.ID = GENRE_LIVRE.ID_GENRE INNER JOIN LIVRE ON GENRE_LIVRE.ID_LIVRE = LIVRE.ID WHERE ID_LIVRE = ".$data['ID']."");
                                $result = $req->fetch();
                                if($result[0] == 'Distraction'):?>
                                    <?php if($compteur < 4): ?>
                                        <?php $compteur++; ?>
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
                                                            <br>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </a>
                                <?php endif; ?>
                            <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="roman">
                <div class="h1Bd">
                    <h1 style="margin-right: 30%;">Dernières parutions Jeunesse</h1><hr/>
                </div>
                <div class="slider">
                    <?php $livre = getLivre(); ?>
                    <?php $compteur = 0; ?>
                    <?php foreach($livre as $data): ?>
                        <?php $link = connectDB();
                                $req = $link->query("SELECT GENRE.LIBELLE FROM GENRE INNER JOIN GENRE_LIVRE ON GENRE.ID = GENRE_LIVRE.ID_GENRE INNER JOIN LIVRE ON GENRE_LIVRE.ID_LIVRE = LIVRE.ID WHERE ID_LIVRE = ".$data['ID']."");
                                $result = $req->fetch();
                                if($result[0] == 'Jeunesse'):?>
                                    <?php if($compteur < 4): ?>
                                        <?php $compteur++; ?>
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
                                                            <br>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </a>
                                <?php endif; ?>
                            <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                    <div class="menuFooter">
                        <div class="menu1" style="margin-left: 8%;">
                            <ul style="list-style-type: none; text-decoration:none;">
                                <li><span><a href="">Architecture et urbanisme</a></span></li>
                                <li><span><a href="">Arts</a></span></li>
                                <li><span><a href="">Bandes dessinées, Mangas</a></span></li>
                                <li><span><a href="">Bien être et vie pratique</a></span></li>
                                <li><span><a href="">Economie, industrie, technique</a></span></li>
                                <li><span><a href="">Education, connaissance</a></span></li>
                                <li><span><a href="">Jeunesse</a></span></li>
                                <li><span><a href="">Littérature</a></span></li>
                                <li><span><a href="">Loisirs, Distractions</a></span></li>
                                <li><span><a href="">Sciences humaines, sociales</a></span></li>
                            </ul>
                        </div>
                        <div class="menu1" style="margin-left: 10%; text-decoration:none;">
                        <ul style="list-style-type: none;">
                            <li><a href="">Les meilleures ventes</a></li>
                            <li><a href="">Les lectures recommandées par nos libraires</a></li>
                            <li><a href="">Parcourez nos sélections de livres</a></li>
                            <li><a href="">Choisir son point libraire</a></li>
                            <li><a href="">Devenez Point Libraire</a></li>
                            <li><a href="">Tous nos Points Libraires</a></li>
                        </ul>
                    </div>
                    <div class="menu1" style="margin-left: 10%; text-decoration:none;">
                        <ul style="list-style-type: none;">
                            <li><a href="">Créer votre compte</a></li>
                            <li><a href="">Rencontres filmées</a></li>
                            <li><a href="">Espace Presse</a></li>
                            <li><a href="">FAQ</a></li>
                            <li><a href="">Conditions générales de vente lalibrairie.com</a></li>
                            <li><a href="">Conditions générales de vente livres numériques</a></li>
                            <li><a href="">Qui sommes-nous ?</a></li>
                            <li><a href="">Mentions légales</a></li>
                            <li><a href="">Nous contacter</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bande" style="height: 2px;"></div>
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
                                        header("Location:Panier.php");
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