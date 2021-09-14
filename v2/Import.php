<?php 

if(!empty($_FILES['article']['name'])){
    $link = mysqli_connect("localhost", "root", "root", "WeblibrairieVVA");
    $output = "";
    $ext = array("csv");
    $extension = end(explode(".", $_FILES["article"]["name"]));
    if(in_array($extension, $ext)){
        $file_data = fopen($_FILES["article"]["tmp_name"], "r");
        fgetcsv($file_data);
        while($row = fgetcsv($file_data)){
            $editeur = mysqli_real_escape_string($link, $row[0]);
            $genre = mysqli_real_escape_string($link, $row[1]);
            $isbn = mysqli_real_escape_string($link, $row[2]);
            $resume = mysqli_real_escape_string($link, $row[3]);
            $image = mysqli_real_escape_string($link, $row[4]);
            $titre = mysqli_real_escape_string($link, $row[5]);
            $dtParu = mysqli_real_escape_string($link, $row[6]);
            $prix = mysqli_real_escape_string($link, $row[7]);
            $nomEcrivain = mysqli_real_escape_string($link, $row[8]);
            $prenomEcrivain = mysqli_real_escape_string($link, $row[9]);
            $idEcrivain = mysqli_real_escape_string($link, $row[10]);
            $idGenre = mysqli_real_escape_string($link, $row[11]);
            
            $req = "INSERT INTO LIVRE (`ID`, `ID_ECRIVAIN`, `ID_GENRE`, `ISBN`, `TITRE`, `RESUME`, `IMAGE`, `DT_PARUTION`, `PRIX_UNITAIRE`, `EDITEUR`) VALUES (Null, '$idEcrivain', '$idGenre', '$isbn', '$titre', '$resume', '$image', '$dtParu', '$prix', '$editeur')";
            mysqli_query($link, $req);
            print_r($row);
        }
    }
    else{
        echo 'Error1';
    }
}
else{
    echo 'Error2';
}


?>