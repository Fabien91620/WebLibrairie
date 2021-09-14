 <html>
        <head>
            <title>WebLibrairie</title>
            <link href="Authentification.css" rel="stylesheet"/>
            <?php
                include_once('Fonctions.php');
            ?>
        </head>
        <body>
            <form method="post" action="">
                <h2>Bienvenu sur notre web librairie</h2>
                <p class="Erreur">
                    <?php 
                        if(isset($_POST['connection'])){
                            if(connectClient()==true){
                                header("Location:AccueilC.php");
                            }
                            else{
                                echo "Erreur de connection";
                            }
                        }
                    ?>
                </p>
                <div class="info">
                    <p>
                        <label for="users">Nom</label>
                        <input type="text" name="nom" placeholder="Mon Nom" required/>
                    </p>
                    <p>
                        <label for="mdp">Password</label>
                        <input id="mdp" type="password" name="mdp" placeholder="Mot de passe" required/>
                    </p>
                </div>
                <div class="btn">
                    <a href="Inscription.php"><input type="button" name="enregister" value="S'inscrire"/></a>
                    <input type="submit" name="connection" value="Se connecter"/>
                </div>
            </form>
        </body>
    </html>