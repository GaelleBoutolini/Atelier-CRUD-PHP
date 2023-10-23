<?php
require_once("header.php");
require_once("footer.php");

require_once "connexion.php";
//modification de l'id dans le lien
$id = $_GET['EMPNO'];
// récupère la valeur de l'identifiant de l'employé à partir de la requête HTTP GET. La variable $_GET est un tableau associatif qui contient toutes les données passées en paramètre dans l'URL de la requête.
//requete de suppression
$response = $bdd->query("DELETE FROM employes WHERE EMPNO = $id");
//redirection vers la page index.php
header("location:index.php");
?>



