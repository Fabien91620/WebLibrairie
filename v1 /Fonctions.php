<?php
session_start();
function connectDB(){
    $host ="localhost";
    $user="root";
    $mdp="root";
    $db="weblibrairie";
    $link = mysqli_connect($host,$user,$mdp,$db);
    if($link){
        return $link;
    }
    else{
        echo "Erreur de connection à la base de donnée";
        return false;
    }
}
function connectClient(){
	$link = connectDB();
	if(!$link){
		return false;
	}
    else{
		$nom= $_POST['nom'];
		$mdp= $_POST['mdp'];
		$req= "select * from client where nom='$nom' and mdp='$mdp'";
		$res = mysqli_query($link,$req);
		$row = mysqli_num_rows($res);
        if($row==1){
            return true;
        }
        else{
            return false;
        }
	}
}
function addClient(){
    $success = false;
    $link = connectDB();
    if(!$link){
        return false;
    }
    else{
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $cp = $_POST['cp'];
        $tel = $_POST['tel'];
        $email = $_POST['mail'];
        $mdp = $_POST['mdp'];
        $req = "INSERT INTO client (nom, prenom, adresse, ville, codePostal, tel, email, mdp) VALUES('$nom', '$prenom', '$adresse', '$ville', '$cp', '$tel', '$email', '$mdp')";
        $res = mysqli_query($link, $req);
        if($res == true){
            $success = true;
        }
    }
    return $success;
}
function rechercheAuteur(){
    $link = connectDB();
    $idAuteur= $_GET['auteur'];
    $req = "SELECT livre.image, livre.titre, livre.id, auteur.nom, auteur.prenom FROM livre INNER JOIN auteur ON livre.idAuteur = auteur.id WHERE auteur.id= $idAuteur";
    $res = mysqli_query($link, $req);
    return $res;
}
function getAuteur(){
    $link = connectDB();
    if(!$link){
        return false;
    }
    else{
        $req = "SELECT id, prenom, nom FROM auteur ORDER BY prenom ASC";
        $res = mysqli_query($link, $req);
        return $res;
    }
}
function rechercheTitre(){
    $link = connectDB();
    $titre = $_SESSION['titre'];
    $req = "SELECT auteur.prenom, auteur.nom, livre.image, livre.titre, livre.id FROM auteur INNER JOIN livre ON auteur.id = livre.idAuteur WHERE livre.titre = '$titre'";
    $res = mysqli_query($link, $req);
    return $res;
}
function getTitre(){
    $link = connectDB();
    $req = "SELECT auteur.prenom, auteur.nom, livre.image, livre.titre, livre.id FROM auteur INNER JOIN livre ON auteur.id = livre.idAuteur ORDER BY titre ASC";
    $res = mysqli_query($link, $req);
    return $res;
}
function descriptifLivre(){
    $link = connectDB();
    $idLivre= $_GET['oeuvre'];
    $req = "SELECT livre.resumer, livre.image, livre.titre, livre.genre, livre.dateParution, livre.PU, auteur.nom, auteur.prenom FROM livre INNER JOIN auteur ON livre.idAuteur = auteur.id WHERE livre.id= $idLivre";
    $res = mysqli_query($link, $req);
    return $res;
}
?>