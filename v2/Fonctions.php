<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

function connectDB(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=WeblibrairieVVA;charset=utf8', 'root', 'root');
        return $db;
    }
    catch (Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}
function connectClient(){
	$link = connectDB();
	if(!$link){
		return false;
	}
    else{
		$email= $_POST['Email'];
        $_SESSION['EmailCompte'] = $_POST['Email'];
		$mdp= $_POST['mdp'];
		$req= $link->query("select * from COMPTE where ADRMAILCPTE='$email' and MDP='$mdp'");
        foreach($req as $data){
            $_SESSION['Usercompte'] = $data['USER'];
            $_SESSION['Typecompte'] = $data['TYPECOMPTE'];
            getPanier($data['USER']);
        }
		$row = $req->rowCount();
        if($row==1){
            return true;
        }
        else{
            return false;
        }
	}
}
function getPanier($idCompte){
    $link = connectDB();
    $req = $link->query("SELECT * FROM `PANIER` WHERE ID_COMPTE='$idCompte'");
    $row = $req->rowCount();
    foreach($req as $data){
        $_SESSION['IdPanier'] = $data['ID'];
    }
    if($row==1){
        return true;
    }
    else{
        return false;
    }
}
function connectClientParametre($email, $mdp){
	$link = connectDB();
	if(!$link){
		return false;
	}
    else{
		$req= $link->query("select * from COMPTE where ADRMAILCPTE='$email' and MDP='$mdp'");
        foreach($req as $data){
            $_SESSION['Usercompte'] = $data['USER'];
        }
        $_SESSION['con'] = 1;
		$row = $req->rowCount();
        if($row==1){
            return true;
        }
        else{
            return false;
        }
	}
}
function descriptifLivre(){
    $link = connectDB();
    $idLivre= $_GET['oeuvre'];
    $req = $link->query("SELECT ID_GENRE FROM GENRE_LIVRE WHERE ID_LIVRE = $idLivre");
    $result = $req->fetch();
    $req = $link->query("SELECT LIVRE.ID, LIVRE.RESUME, LIVRE.IMAGE, LIVRE.TITRE, GENRE.LIBELLE, LIVRE.DT_PARUTION, LIVRE.PRIX_UNITAIRE, ECRIVAIN.NOM, ECRIVAIN.PRENOM FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN GENRE ON $result[0] = GENRE.ID WHERE LIVRE.ID= $idLivre");
    return $req;
}
function recherche(){
    $link = connectDB();
    $titre = $_SESSION['titre'];
    $req = $link->query("SELECT ECRIVAIN.PRENOM, ECRIVAIN.NOM, LIVRE.IMAGE, LIVRE.TITRE, LIVRE.ID FROM ECRIVAIN INNER JOIN LIVRE ON ECRIVAIN.ID = LIVRE.ID_ECRIVAIN WHERE ECRIVAIN.NOM = '$titre' OR LIVRE.TITRE = '$titre' OR ECRIVAIN.PRENOM = '$titre'");
    return $req;
}
function getLivre(){
    $link = connectDB();
    $req = $link->query('SELECT ECRIVAIN.PRENOM, ECRIVAIN.NOM, LIVRE.IMAGE, LIVRE.TITRE, LIVRE.ID FROM ECRIVAIN INNER JOIN LIVRE ON ECRIVAIN.ID = LIVRE.ID_ECRIVAIN ORDER BY DT_PARUTION DESC');
    return $req;
}
function inscriptionClient(){
    $link = connectDB();
    $success = false;
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $user = $_POST['user'];
    $mobile = $_POST['mobile'];
    $fixe = $_POST['fixe'];
    $dateToday = date('y-m-d');
    $req = "INSERT INTO `COMPTE` (`USER`, `MDP`, `NOMCPTE`, `PRENOMCPTE`, `DATEINSCRIP`, `TYPECOMPTE`, `ADRMAILCPTE`, `NOTELCPTE`, `NOPORTCPTE`) VALUES ('$user', '$mdp', '$nom', '$prenom', '$dateToday', 'CLI', '$email', '$fixe', '$mobile')";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        $success = true;
        $_SESSION['EmailCompte'] = $email;
        $_SESSION['MdpCompte'] = $mdp;
        CreerPanier($user, $dateToday);
    }
    return $success;
}
function afficherPanier(){
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT PANIER.DT_COM, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.TITRE, LIVRE.IMAGE, ECRIVAIN.NOM, ECRIVAIN.PRENOM, LIGNE_PANIER.NB_PRODUIT FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID INNER JOIN COMPTE ON PANIER.ID_COMPTE = COMPTE.USER WHERE LIVRE.ID = LIGNE_PANIER.ID_LIVRE AND LIGNE_PANIER.ID_PANIER = PANIER.ID AND PANIER.DT_COM is Null AND PANIER.ID_COMPTE = '$user'");
    return $req;
}
function afficherPrixTotal(){
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT ROUND(SUM(LIVRE.PRIX_UNITAIRE * LIGNE_PANIER.NB_PRODUIT), 2) AS PRIX_TOTAL FROM LIVRE INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID WHERE PANIER.DT_COM is Null AND PANIER.ID_COMPTE = '$user'");
    return $req;
}
function CreerPanier($idCompte, $dateOuvert){
    $link = connectDB();
    $success = false;
    $req = "INSERT INTO `PANIER`(`ID_COMPTE`, `DT_OUVERT`) VALUES ('$idCompte', '$dateOuvert')";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        $success = true;
    }
    return $success;
}
function AjouterArticle($idLivre){
    $link = connectDB();
    $idPanier= $_SESSION['IdPanier'];
    $success = false;
    $req = "INSERT INTO `LIGNE_PANIER`(`ID_LIVRE`, `ID_PANIER`, `NB_PRODUIT`) VALUES ('$idLivre', '$idPanier', '1')";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        $success = true;
    }
    return $success;
}
function quantitePanier(){
    $link = connectDB();
    $quantite = $_POST['thelist'];
    $idLivre = $_POST['id'];
    $idPanier= $_SESSION['IdPanier'];
    $success = false;
    $req = "UPDATE `LIGNE_PANIER` SET `NB_PRODUIT` = '$quantite' WHERE `LIGNE_PANIER`.`ID_LIVRE` = '$idLivre' AND `LIGNE_PANIER`.`ID_PANIER` = '$idPanier'";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        $success = true;
    }
    return $success;
}
function PasserCommande(){
    $link = connectDB();
    $idCompte = $_SESSION['Usercompte'];
    $idPanier = $_SESSION['IdPanier'];
    $dateToday = date('y-m-d');
    $success = false;
    $req = "UPDATE `PANIER` SET `DT_COM` = '$dateToday' WHERE `PANIER`.`ID` = '$idPanier'";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        $success = true;
        CreerPanier($idCompte, $dateToday);
        getPanier($_SESSION['Usercompte']);
    }
    return $success;
}
function suppressionArticle(){
    $link = connectDB();
    $success = false;
    $idPanier = $_SESSION['IdPanier'];
    $idLivre = $_GET['supp'];
    $req = "DELETE FROM `LIGNE_PANIER` WHERE `LIGNE_PANIER`.`ID_LIVRE` = '$idLivre' AND `LIGNE_PANIER`.`ID_PANIER` = '$idPanier'";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        $success = true;
    }
    return $success;
}
function mesCommande(){
    $link = connectDB();
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT DATE_FORMAT(DT_COM, '%d/%m/%Y') as date, ID FROM PANIER WHERE ID_COMPTE = '$user' AND DT_COM is not Null ORDER BY `date` DESC");
    return $req;
}
function recupPanier(){
    $link = connectDB();
    $success = false;
    $panier = $_GET['panier'];
    $req = $link->query("SELECT PANIER.DT_COM, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.TITRE, LIVRE.IMAGE, ECRIVAIN.NOM, ECRIVAIN.PRENOM, LIGNE_PANIER.NB_PRODUIT FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID INNER JOIN COMPTE ON PANIER.ID_COMPTE = COMPTE.USER WHERE PANIER.ID='$panier'");
    return $req;
}
function recommanderArticle(){
    $link = connectDB();
    $idLivre = $_GET['recommande'];
    $idpanier = $_SESSION['IdPanier'];
    $success = false;
    $req = "INSERT INTO `LIGNE_PANIER`(`ID_LIVRE`, `ID_PANIER`, `NB_PRODUIT`) VALUES ('$idLivre', '$idpanier', '1')";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        $success = true;
    }
    return $success;
}
function afficherPrixTotalPanier(){
    $link = connectDB();
    $idPanier = $_GET['panier'];
    $req = $link->query("SELECT ROUND(SUM(LIVRE.PRIX_UNITAIRE * LIGNE_PANIER.NB_PRODUIT), 2) AS PRIX_TOTAL FROM LIVRE INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID WHERE PANIER.ID = '$idPanier'");
    return $req;
}
function getCompte(){
    $link = connectDB();
    $idUser = $_SESSION['Usercompte'];
    $req = $link->query("SELECT * FROM COMPTE WHERE COMPTE.USER= '$idUser'");
    return $req;
}
function modifierCompte(){
    $link = connectDB();
    $success = false;
    $user = $_SESSION['Usercompte'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mobile = $_POST['mobile'];
    $fixe = $_POST['fixe'];
    $req = "UPDATE `COMPTE` SET `MDP`='$mdp',`NOMCPTE`='$nom',`PRENOMCPTE`='$prenom', `ADRMAILCPTE`= '$email',`NOTELCPTE`='$fixe',`NOPORTCPTE`='$mobile' WHERE COMPTE.USER = '$user'";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        $success = true;
    }
    return $success;
}
?>