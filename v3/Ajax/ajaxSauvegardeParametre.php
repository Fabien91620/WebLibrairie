<?php
include('../Fonctions.php');

$link = connectDB();
$mail = $_POST["email"];
$mdp = $_POST["mdp"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$telF = $_POST["telF"];
$telP =$_POST["telP"];
$idCompte = $_SESSION['Usercompte'];

try {
    if($mail == "" || $mdp == ""){
        echo 'Mail ou mot de passe obligatoire';
    }
    else{
        $req = "UPDATE COMPTE SET ADRMAILCPTE='$mail', MDP='$mdp', NOMCPTE='$nom', PRENOMCPTE='$prenom', NOTELCPTE='$telF', NOPORTCPTE='$telP' WHERE COMPTE.USER = '$idCompte'";
        $res = $link->prepare($req);
        $row = $res->execute();
        echo 'Mise à jour effectuer !';
    }
}
catch(PDOException $e)
{
    echo $req . "<br>" . $e->getMessage();
}
