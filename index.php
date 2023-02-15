<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css">
  <title>Page d'entête</title>
</head>
<body>
  <?php
  include("header.php");
  include("footer.php");
  ?>
<div class="titre">
    <h1>Ma page d'accueil</h1>
    </div>
    <div class="container">
      
      <table>
          <tr id="items">
              <th>EMPNOM</th>
              <th>EMPPREN</th>
              <th>EMPSEXE</th>
              <th>EMPSALAIRE</th>
              <th>EMPPRIME</th>
              <th>SRVNO</th>
              <th>Modifier</th>
              <th>Supprimer</th>
          </tr>
          <a href="ajouter.php" class="Btn_add"><img src="/images/img.png" alt="">Ajouter</a>
      <?php
      // J'inclue la page de connexion
      include_once "connexion.php";
      ?>
      
      <!-- //requête pour afficher la liste des employés -->
          <?php
          $response = $bdd->query('SELECT * FROM employes');
          while ($donnees = $response->fetch()) { ?>

              <tr>
                  <td><?= $donnees['EMPNOM'] ?></td>
                  <td><?= $donnees['EMPPREN'] ?></td>
                  <td><?= $donnees['EMPSEXE'] ?></td>
                  <td><?= $donnees['EMPSALAIRE'] ?></td>
                  <td><?= $donnees['EMPPRIME'] ?></td>
                  <td><?= $donnees['SRVNO'] ?></td>
                
           <!-- //Ici, je met l'id de chaque employé dans ce lien -->
           <td><a href="modifier.php?EMPNO=<?=$donnees['EMPNO']?> "><img src="/images/pen.png" alt=""></a></td>
           <td><a href="supprimer.php?EMPNO=<?=$donnees['EMPNO']?> "><img src="/images/trash.png" alt=""></a></td>
          <?php
          }
          ?>
      </table>

    </div>
  </body>
</html>