<html>
    <head>
        <title>WebLibrairie</title>
        <link href="CSS/Inscription.css" rel="stylesheet"/>
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
                <a id="Connec"><img src="assets/Background/IconeConnection.png"><p> Me connecter</p></a><br/>
                <?php endif; ?>
                <?php if(isset($_SESSION['con'])): ?>
                <a class="LienConnect" href="Profil.php"><img src="assets/Background/IconeConnection.png"><p><?= $_SESSION['Usercompte']; ?></p><br/></a>
                <?php endif; ?>
                <a class="LienPanier" href="Panier.php"><img src="assets/Background/IconePanier.png"><p> Panier</p></a>
            </div>
        </div>
        <div class="container">
            <?php if(isset($_POST['modif'])): ?>
             <?php $success = modifierCompte(); ?>
                <?php if($success): ?>
                        <?php echo "<p class='messageModif'>Modification effectuée</p>" ?>
                <?php else: ?>
                    <?php echo "<p>Erreur</p>"; ?>
                <?php endif; ?>
            <?php endif; ?>
            <form method="post" action="">
                <?php $compte = getCompte(); ?>
                <?php foreach($compte as $data): ?>
                <div class="inscipchamp">
                    <h2>Modifier vos informations personelles</h2>
                    <p>*champs obligatoires</p>
                </div>
                <div class="email">
                    <label>Email</label>
                    <span>*</span><br/>
                    <input type="email" name="email" value="<?php echo $data['ADRMAILCPTE'];?>" required/>
                </div>
                <div class="dmdp">
                     <div class="mdp">
                        <label>Mot de passe</label>
                        <span>*</span><br/>
                        <input type="password" name="mdp" value="<?php echo $data['MDP'];?>" required/>
                     </div>
                     <div class="mdpc">
                         <label>Confirmation du mot de passe</label>
                        <span>*</span><br/>
                        <input type="password" name="mdpc" value="<?php echo $data['MDP'];?>" required/>
                     </div>
                </div>
                <div class="prenom">
                    <label>Prénom</label>
                    <span>*</span><br/>
                    <input type="text" name="prenom" value="<?php echo $data['PRENOMCPTE'];?>" required/>
                </div>
                <div class="nom">
                    <label>Nom</label>
                    <span>*</span><br/>
                    <input type="text" name="nom" value="<?php echo $data['NOMCPTE'];?>" required/>
                </div>
                <div class="num">
                    <div class="mobile">
                        <label>Mobile</label><br/>
                        <input type="tel" name="mobile" value="<?php echo $data['NOPORTCPTE'];?>"/>
                    </div>
                    <div class="fixe">
                        <label>Téléphone fixe</label><br/>
                        <input type="tel" name="fixe" value="<?php echo $data['NOTELCPTE'];?>"/>
                    </div>
                </div>
                <input class="btnSub" name="modif" type="submit" value="Confirmer votre modification"/>
                <?php endforeach; ?>
            </form>
        </div>
        <div class="faq">
            <h2>FAQ</h2>
            <p>N'hésitez pas à consulter nos FAQ vous y trouverez peut-être la réponse à votre question. Sinon, laissez-nous un message sur ce  formulaire.
                Consulter nos FAQ
            </p>
        </div>
    </body>
</html>