<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Ajouter</title>
</head>
<body>
    <?php
    //vérifier que le bouton ajouter a bien été cliquer
    if(isset($_POST['button'])){
       //extraction des informations envoyés dans des variables par la méthode POST
       $EMPNOM = $_POST['EMPNOM'];
$EMPPREN = $_POST['EMPPREN'];
$EMPSEXE = $_POST['EMPSEXE'];
$EMPSALAIRE = $_POST['EMPSALAIRE'];
$EMPPRIME = $_POST['EMPPRIME'];
$SRVNO = $_POST['SRVNO'];

       //vérifier que tous les champs pnt été remplis
       if(isset($EMPNOM) && isset($EMPPREN) && isset($EMPSEXE) && isset($EMPSALAIRE) && isset($EMPPRIME)&& isset($SRVNO)){
        //connexion à la base de données
        include_once "connexion.php";
        //requête d'ajout
        $sql = $bdd->query("INSERT INTO employes (EMPNOM, EMPPREN, EMPSEXE, EMPSALAIRE, EMPPRIME, SRVNO)
        VALUES ('$EMPNOM', '$EMPPREN', '$EMPSEXE', '$EMPSALAIRE', '$EMPPRIME', '$SRVNO')");
         
         if($sql){
            header("location: index.php"); 
         }else{//sinon 
            $message ="Employé non ajouté";
         }

       }else{
        //sinon
        $message = "Veuillez remplir tous les champs !";

       }
    }
     
    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="/images/back.png" alt="">Retour</a>
        <h2>Ajouter un employé</h2>
        <p class="erreur_message">
         <?php
         //si la variable message existe, affichons son contenu
         if(isset($message)){
            echo $message;
         }
         ?>
            </p>
        <form action="" method="POST">
        <label>EMPNOM : </label>
        <input type="text" name="EMPNOM"><br>
        <label>EMPPREN: </label>
        <input type="text" name="EMPPREN"><br>
        <label>EMPSEXE: </label>
        <input type="text" name="EMPSEXE"><br>
        <label>EMPSALAIRE: </label>
        <input type="number" name="EMPSALAIRE"><br>
        <label>EMPPRIME: </label>
        <input type="number" name="EMPPRIME"><br>
        <label>SRVNO: </label>
        <input type="number" name="SRVNO"><br>
        <input type="submit" name="button" value="Ajouter">
    </form>
    </div>
</body>
</html>




















        
