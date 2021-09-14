 <html>
        <head>
            <title>WebLibrairie</title>
            <link href="Inscription.css" rel="stylesheet"/>
            <?php 
                include_once('Fonctions.php');
            ?>
        </head>
        <body>
            <form method="post" action="">
                <h2>Bienvenu sur notre web librairie</h2>
                <p>
                    <?php
                        if(isset($_POST['connection'])){
                            $success = addClient();
                            if($success){
                                header("Location:AccueilC.php");
                            }                
                            else{
                                echo "Echec de l'enregistrement";
                            }               
                        }
                    ?>
                </p>
                <div class="info">
                    <p>
                        <label for="nom">Nom</label>
                        <input type="text" name="nom" placeholder="Mon Nom" required/>
                    </p>
                    <p>
                        <label for="prenom">Prenom</label>
                        <input type="text" name="prenom" placeholder="Mon Prenom" required/>
                    </p>
                    <p>
                        <label for="prenom">Adresse</label>
                        <input type="text" name="adresse" placeholder="2 rue de la fontaine" required/>
                    </p>
                    <p>
                        <label for="prenom">Ville</label>
                        <input type="text" name="ville" placeholder="Paris" required/>
                    </p>
                    <p>
                        <label for="prenom">Code Postal</label>
                        <input type="text" name="cp" placeholder="75000" required/>
                    </p>
                    <p>
                        <label for="prenom">Telephone</label>
                        <input type="text" name="tel" placeholder="0X XX XX XX XX" required/>
                    </p>
                    <p>
                        <label for="prenom">Mail</label>
                        <input type="email" name="mail" placeholder="abc@abc.fr" required/>
                    </p>
                    <p>
                        <label for="mdp">Mot de passe</label>
                        <input type="password" name="mdp" placeholder="Mot de passe" required/>
                    </p>
                </div>
                <div class="btn">
                    <a href="Authentification.php"><input type="button" name="retour" value="Retour"/></a>
                    <input type="submit" name="connection" value="Valider"/>
                </div>
            </form>
        </body>
    </html>