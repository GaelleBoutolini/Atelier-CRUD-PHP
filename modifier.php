<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Modifier</title>
</head>
<body>
<?php
require_once("header.php");
require_once("footer.php");

//connexion à la base de données
include_once "connexion.php";
//on récupère de id dans le lien
$id = $_GET['EMPNO'];
//requête pour afficher les infos d'un employé
$response = $bdd->query('SELECT * FROM employes');
$donnees = $response->fetch();

    //vérifier que le bouton ajouter a bien été cliquer
    if(isset($_POST['button'])){
       //extraction des informations envoyés dans des variables par la méthode POST
       extract($_POST);
       //vérifier que tous les champs ont été remplis
       
        $sql = $bdd->query("UPDATE employes SET EMPNOM = '$EMPNOM', EMPPREN = '$EMPPREN', EMPSEXE= '$EMPSEXE' , EMPSALAIRE='$EMPSALAIRE', EMPPRIME='$EMPPRIME', SRVNO='$SRVNO' WHERE EMPNO = $id");
         
         if($sql){//si la requete a été effectuée avec succèes, on fait une redirection
            header("location: index.php"); 
         }else{//sinon 
            $message ="Employé non modifié";
         }

       }else{
        //sinon
        $message = "Veuillez remplir tous les champs !";

       }
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="/images/back.png" alt="">Retour</a>
        <h2>Modifier un employé: <?= $donnees['EMPNOM']?></h2>
        <p class="erreur_message"> 
            <?php
                if(isset($message)){
                    echo $message;
                }
            ?>
        </p>
        <form action="" method="POST">
        <label>EMPNOM</label>
        <input type="text" name="EMPNOM" value="<?= $donnees['EMPNOM'] ?>">

        <label>EMPPREN</label>
        <input type="text" name="EMPPREN" value="<?= $donnees['EMPPREN'] ?>">

        <label>EMPSEXE</label>
        <input type="text" name="EMPSEXE" value="<?= $donnees['EMPSEXE'] ?>">

        <label>EMPSALAIRE</label>
        <input type="number" name="EMPSALAIRE" value="<?= $donnees['EMPSALAIRE'] ?>">

        <label>EMPPRIME</label>
        <input type="number" name="EMPPRIME" value="<?= $donnees['EMPPRIME'] ?>">

        <label>SRVNO</label>
        <input type="number" name="SRVNO" value="<?= $donnees['SRVNO'] ?>">
                <br>

        <input type="submit" value="Modifier" name="button">
    </form>
    </div>
</body>
</html>

