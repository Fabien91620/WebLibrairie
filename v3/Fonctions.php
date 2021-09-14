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
            getWishlist($data['USER']);
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
function getWishlist($idCompte){
    $link = connectDB();
    $req = $link->query("SELECT * FROM `WISHLIST` WHERE ID_COMPTE='$idCompte'");
    $row = $req->rowCount();
    foreach($req as $data){
        $_SESSION['IdWishList'] = $data['ID'];
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
            $_SESSION['Typecompte'] = $data['TYPECOMPTE'];
            getPanier($data['USER']);
            getWishlist($data['USER']);
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
    $idLivre= $_GET['livre'];
    $req = $link->query("SELECT ID_GENRE FROM GENRE_LIVRE WHERE ID_LIVRE = $idLivre");
    $result = $req->fetch();
    $req = $link->query("SELECT IMAGE_LIVRE.FORMAT, IMAGE_LIVRE.SOURCE, LIVRE.ID, LIVRE.RESUME, LIVRE.TITRE, GENRE.LIBELLE, LIVRE.DT_PARUTION, LIVRE.PRIX_UNITAIRE, ECRIVAIN.NOM, ECRIVAIN.PRENOM FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN GENRE ON $result[0] = GENRE.ID INNER JOIN IMAGE_LIVRE ON IMAGE_LIVRE.ID_LIVRE = $idLivre WHERE LIVRE.ID= $idLivre AND IMAGE_LIVRE.FORMAT = '450x565'");
    return $req;
}
function rechercheLivre270x340(){
    $link = connectDB();
    $titre = $_SESSION['titre'];
    $req = $link->query("SELECT IMAGE_LIVRE.SOURCE, LIVRE.TITRE, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.BEST_SELLER, LIVRE.COEUR FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID INNER join GENRE_LIVRE on LIVRE.ID = GENRE_LIVRE.ID_LIVRE inner join GENRE on GENRE_LIVRE.ID_GENRE = GENRE.ID inner join ECRIVAIN on LIVRE.ID_ECRIVAIN = ECRIVAIN.ID WHERE IMAGE_LIVRE.FORMAT = '270x340' AND (ECRIVAIN.NOM = '$titre' OR LIVRE.TITRE = '$titre' OR ECRIVAIN.PRENOM = '$titre')");
    return $req;
}
function rechercheLivre450x565(){
    $link = connectDB();
    $titre = $_SESSION['titre'];
    $req = $link->query("SELECT IMAGE_LIVRE.SOURCE, LIVRE.TITRE, LIVRE.RESUME, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.BEST_SELLER, LIVRE.COEUR FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID INNER join GENRE_LIVRE on LIVRE.ID = GENRE_LIVRE.ID_LIVRE inner join GENRE on GENRE_LIVRE.ID_GENRE = GENRE.ID inner join ECRIVAIN on LIVRE.ID_ECRIVAIN = ECRIVAIN.ID WHERE IMAGE_LIVRE.FORMAT = '450x565' AND (ECRIVAIN.NOM = '$titre' OR LIVRE.TITRE = '$titre' OR ECRIVAIN.PRENOM = '$titre')");
    return $req;
}
function getLivre270x340G(){
    $link = connectDB();
    $genre = $_GET['categorie'];
    if ($genre == 'Best'){
        $req = $link->query('SELECT IMAGE_LIVRE.SOURCE, LIVRE.TITRE, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.BEST_SELLER, LIVRE.COEUR FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID INNER join GENRE_LIVRE on LIVRE.ID = GENRE_LIVRE.ID_LIVRE inner join GENRE on GENRE_LIVRE.ID_GENRE = GENRE.ID  WHERE IMAGE_LIVRE.FORMAT = "270x340" AND LIVRE.BEST_SELLER = "1" ORDER BY DT_PARUTION DESC');
    }
    elseif ($genre == 'Tout'){
        $req = $link->query('SELECT IMAGE_LIVRE.SOURCE, LIVRE.TITRE, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.BEST_SELLER, LIVRE.COEUR FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID INNER join GENRE_LIVRE on LIVRE.ID = GENRE_LIVRE.ID_LIVRE inner join GENRE on GENRE_LIVRE.ID_GENRE = GENRE.ID  WHERE IMAGE_LIVRE.FORMAT = "270x340" ORDER BY DT_PARUTION DESC');
    }
    else{
        $req = $link->query('SELECT IMAGE_LIVRE.SOURCE, LIVRE.TITRE, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.BEST_SELLER, LIVRE.COEUR FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID INNER join GENRE_LIVRE on LIVRE.ID = GENRE_LIVRE.ID_LIVRE inner join GENRE on GENRE_LIVRE.ID_GENRE = GENRE.ID  WHERE IMAGE_LIVRE.FORMAT = "270x340" AND GENRE.LIBELLE = "'.$genre.'" ORDER BY DT_PARUTION DESC');
    }
    return $req;
}
function getLivre270x340(){
    $link = connectDB();
    $req = $link->query('SELECT IMAGE_LIVRE.SOURCE, LIVRE.TITRE, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.BEST_SELLER, LIVRE.COEUR FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID WHERE IMAGE_LIVRE.FORMAT = "270x340" ORDER BY DT_PARUTION DESC');
    return $req;
}
function getLivre450x565G(){
    $link = connectDB();
    $genre = $_GET['categorie'];
    $req = $link->query('SELECT IMAGE_LIVRE.SOURCE, LIVRE.TITRE, LIVRE.RESUME, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.BEST_SELLER, LIVRE.COEUR FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID INNER join GENRE_LIVRE on LIVRE.ID = GENRE_LIVRE.ID_LIVRE inner join GENRE on GENRE_LIVRE.ID_GENRE = GENRE.ID  WHERE IMAGE_LIVRE.FORMAT = "450x565" AND GENRE.LIBELLE = "'.$genre.'" ORDER BY DT_PARUTION DESC');
    return $req;
}
function getBestSeller304x384(){
    $link = connectDB();
    $req = $link->query('SELECT IMAGE_LIVRE.SOURCE, LIVRE.TITRE, LIVRE.ID, LIVRE.PRIX_UNITAIRE FROM IMAGE_LIVRE INNER JOIN LIVRE ON IMAGE_LIVRE.ID_LIVRE = LIVRE.ID WHERE IMAGE_LIVRE.FORMAT = "304x384" AND LIVRE.BEST_SELLER = 1 ORDER BY DT_PARUTION DESC');
    return $req;
}
function inscriptionClient(){
    $link = connectDB();
    $success = false;
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $user = $_POST['user'];
    $dateToday = date('y-m-d');
    $req = "INSERT INTO `COMPTE` (`USER`, `MDP`, `DATEINSCRIP`, `TYPECOMPTE`, `ADRMAILCPTE`) VALUES ('$user', '$mdp', '$dateToday', 'CLI', '$email')";
    $res = $link->prepare($req);
    $row = $res->execute();
    if($row == true){
        $success = true;
        $_SESSION['EmailCompte'] = $email;
        $_SESSION['MdpCompte'] = $mdp;
        CreerPanier($user, $dateToday);
        CreerWishlist($user, $dateToday);
    }
    return $success;
}
function afficherPanier80x100(){
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT ROUND(LIVRE.PRIX_UNITAIRE * LIGNE_PANIER.NB_PRODUIT, 2) AS PRIXCALCULER, IMAGE_LIVRE.SOURCE, PANIER.DT_COM, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.TITRE, ECRIVAIN.NOM, ECRIVAIN.PRENOM, LIGNE_PANIER.NB_PRODUIT FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID INNER JOIN COMPTE ON PANIER.ID_COMPTE = COMPTE.USER INNER JOIN IMAGE_LIVRE on LIVRE.ID = IMAGE_LIVRE.ID_LIVRE WHERE IMAGE_LIVRE.FORMAT = '80x100' AND LIVRE.ID = LIGNE_PANIER.ID_LIVRE AND LIGNE_PANIER.ID_PANIER = PANIER.ID AND PANIER.DT_COM is Null AND PANIER.ID_COMPTE = '$user'");
    return $req;
}
function afficherPanier(){
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT IMAGE_LIVRE.SOURCE, PANIER.DT_COM, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.TITRE, ECRIVAIN.NOM, ECRIVAIN.PRENOM, LIGNE_PANIER.NB_PRODUIT FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID INNER JOIN COMPTE ON PANIER.ID_COMPTE = COMPTE.USER INNER JOIN IMAGE_LIVRE on LIVRE.ID = IMAGE_LIVRE.ID_LIVRE WHERE IMAGE_LIVRE.FORMAT = '75x94' AND LIVRE.ID = LIGNE_PANIER.ID_LIVRE AND LIGNE_PANIER.ID_PANIER = PANIER.ID AND PANIER.DT_COM is Null AND PANIER.ID_COMPTE = '$user'");
    return $req;
}
function afficherWhishlist(){
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT IMAGE_LIVRE.SOURCE, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.TITRE FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN LIGNE_WISHLIST ON LIVRE.ID = LIGNE_WISHLIST.ID_LIVRE INNER JOIN WISHLIST ON LIGNE_WISHLIST.ID_WISHLIST = WISHLIST.ID INNER JOIN COMPTE ON WISHLIST.ID_COMPTE = COMPTE.USER INNER JOIN IMAGE_LIVRE on LIVRE.ID = IMAGE_LIVRE.ID_LIVRE WHERE IMAGE_LIVRE.FORMAT = '80x100' AND LIVRE.ID = LIGNE_WISHLIST.ID_LIVRE AND LIGNE_WISHLIST.ID_WISHLIST = WISHLIST.ID AND WISHLIST.ID_COMPTE =  '$user'");
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
function CreerWishlist($idCompte){
    $link = connectDB();
    $success = false;
    $req = "INSERT INTO `WISHLIST`(`ID_COMPTE`) VALUES ('$idCompte')";
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
function mesCommande(){
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT DATE_FORMAT(DT_COM, '%d-%m-%Y') as date, ID FROM PANIER WHERE ID_COMPTE = '$user' AND DT_COM is not Null ORDER BY ID DESC, date DESC");
    return $req;
}
function recupPanier(){
    $link = connectDB();
    $panier = $_GET['Commande'];
    $req = $link->query("SELECT ROUND(LIVRE.PRIX_UNITAIRE * LIGNE_PANIER.NB_PRODUIT, 2) AS PRIXCALCULER, IMAGE_LIVRE.SOURCE, PANIER.DT_COM, LIVRE.ID, LIVRE.PRIX_UNITAIRE, LIVRE.TITRE, ECRIVAIN.NOM, ECRIVAIN.PRENOM, LIGNE_PANIER.NB_PRODUIT FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID INNER JOIN COMPTE ON PANIER.ID_COMPTE = COMPTE.USER INNER JOIN IMAGE_LIVRE on LIVRE.ID = IMAGE_LIVRE.ID_LIVRE WHERE IMAGE_LIVRE.FORMAT = '75x94' AND LIVRE.ID = LIGNE_PANIER.ID_LIVRE AND LIGNE_PANIER.ID_PANIER = PANIER.ID AND PANIER.ID = '$panier'");
   return $req;
}
function afficherPrixTotalPanier(){
    $link = connectDB();
    $panier = $_GET['Commande'];
    $req = $link->query("SELECT ROUND(SUM(LIVRE.PRIX_UNITAIRE * LIGNE_PANIER.NB_PRODUIT), 2) AS PRIX_TOTAL FROM LIVRE INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID WHERE PANIER.ID = '$panier'");
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
function getCompte(){
    $link = connectDB();
    $idUser = $_SESSION['Usercompte'];
    $req = $link->query("SELECT * FROM COMPTE WHERE COMPTE.USER= '$idUser'");
    return $req;
}
function getGenre(){
    $link = connectDB();
    $req = $link->query("select COUNT(LIBELLE) as nb, GENRE.LIBELLE from GENRE inner join GENRE_LIVRE on GENRE.ID = GENRE_LIVRE.ID_GENRE GROUP by LIBELLE");
    return $req;
}
function getNbArticlePanier(){
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT count(*) as nb FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID INNER JOIN COMPTE ON PANIER.ID_COMPTE = COMPTE.USER WHERE LIVRE.ID = LIGNE_PANIER.ID_LIVRE AND LIGNE_PANIER.ID_PANIER = PANIER.ID AND PANIER.DT_COM is Null AND PANIER.ID_COMPTE = '$user'");
    return $req;
}
function getNbArticleWishliste(){
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT count(*) as nb FROM LIVRE INNER JOIN ECRIVAIN ON LIVRE.ID_ECRIVAIN = ECRIVAIN.ID INNER JOIN LIGNE_WISHLIST ON LIVRE.ID = LIGNE_WISHLIST.ID_LIVRE INNER JOIN WISHLIST ON LIGNE_WISHLIST.ID_WISHLIST = WISHLIST.ID INNER JOIN COMPTE ON WISHLIST.ID_COMPTE = COMPTE.USER WHERE LIVRE.ID = LIGNE_WISHLIST.ID_LIVRE AND LIGNE_WISHLIST.ID_WISHLIST = WISHLIST.ID AND WISHLIST.ID_COMPTE = '$user'");
    return $req;
}
function getDernierPanier(){
    $link = connectDB();
    $user = $_SESSION['Usercompte'];
    $req = $link->query("SELECT MAX(id) FROM PANIER WHERE ID_COMPTE = '$user' AND DT_COM != ''");
    return $req;
}
function afficherToutLesLivres(){
    $link = connectDB();
    $req = $link->query("SELECT * FROM `LIVRE` ORDER BY `LIVRE`.`ID` ASC");
    return $req;
}
function getAjouterGenre(){
    $link = connectDB();
    $req = $link->query("select * from GENRE");
    return $req;
}
function getAjouterAuteur(){
    $link = connectDB();
    $req = $link->query("select * from ECRIVAIN");
    return $req;
}
function getAjouterCompte(){
    $link = connectDB();
    $req = $link->query("select * from COMPTE");
    return $req;
}
function rechercheCompte(){
    $link = connectDB();
    $compte = $_SESSION['compte1'];
    $req = $link->query("SELECT * FROM COMPTE WHERE COMPTE.USER = '$compte' OR COMPTE.NOMCPTE = '$compte' OR COMPTE.ADRMAILCPTE = '$compte'");
    return $req;
}
function getRetourClient(){
    $link = connectDB();
    $req = $link->query("SELECT * FROM CONTACT");
    return $req;
}
function getRetourClientDetail(){
    $link = connectDB();
    $retour = $_GET['id'];
    $req = $link->query("SELECT * FROM CONTACT WHERE ID='$retour'");
    return $req;
}
function getChiffredaffaire(){
    $link = connectDB();
    $req = $link->query("SELECT ROUND(SUM(LIVRE.PRIX_UNITAIRE * LIGNE_PANIER.NB_PRODUIT), 2) AS PRIX_TOTAL FROM LIVRE INNER JOIN LIGNE_PANIER ON LIVRE.ID = LIGNE_PANIER.ID_LIVRE INNER JOIN PANIER ON LIGNE_PANIER.ID_PANIER = PANIER.ID");
    return $req;
}
function getCommandeClient(){
    $link = connectDB();
    $req = $link->query("SELECT COUNT(*) as NB, COMPTE.USER FROM PANIER INNER JOIN COMPTE ON PANIER.ID_COMPTE = COMPTE.USER GROUP BY COMPTE.USER ORDER BY `NB` DESC");
    return $req;
}
?>