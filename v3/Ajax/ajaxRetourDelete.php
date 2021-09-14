<?php

include('../Fonctions.php');

$link = connectDB();
$id = $_POST["id"];

try {

    $req = "DELETE FROM CONTACT WHERE ID='$id'";
    $res = $link->prepare($req);
    $row = $res->execute();

} catch (PDOException $e) {
    echo $req . "<br>" . $e->getMessage();
}
