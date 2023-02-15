<?php
include('./header.php');
include('./footer.php');
try {
    $bdd = new PDO("mysql:host=localhost;dbname=entreprise;charset=utf8", "root", "");
    //set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    die();
}
?>






<!-- 

$servername = "localhost";
   $username = "dev";
   $password = "**************"; -->
<!-- 
// try {
//     $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
// } catch (PDOException $e) {
//     echo "Erreur de connexion : " . $e->getMessage();
//     die();
// } -->
<!-- 
// if ($bdd->getAttribute(PDO::ATTR_CONNECTION_STATUS)) {
//     echo "Connexion établie avec succès";
// } else {
//     echo "Erreur de connexion";
// }
// ?> -->


<!-- Ce code établit une connexion à une base de données en utilisant PHP Data Objects (PDO). Il définit d'abord quatre variables : $host, $dbname, $username et $password. Ces variables sont utilisées pour stocker les informations de connexion à la base de données.

Ensuite, le code utilise un bloc try-catch pour établir une connexion à la base de données en utilisant la méthode new PDO(). La méthode new PDO() prend en entrée la chaîne de connexion à la base de données, qui spécifie les détails de la connexion tels que le nom d'hôte ($host), le nom de la base de données ($dbname), le nom d'utilisateur ($username) et le mot de passe ($password).

Si la connexion échoue, une exception PDOException est levée et est gérée par le bloc catch. Le message d'erreur est affiché à l'utilisateur avec echo et le script s'arrête en utilisant die().

Si la connexion est établie avec succès, une nouvelle instance de l'objet PDO est créée et stockée dans la variable $bdd. Vous pouvez maintenant utiliser cet objet pour exécuter des requêtes SQL sur la base de données. */

 -->
