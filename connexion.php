<?php
include('./header.php');
include('./footer.php');
try {
    $bdd = new PDO("mysql:host=localhost;dbname=entreprise1;charset=utf8", "root", "");
    //set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}
?>




