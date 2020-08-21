<?php
session_start();

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', $_SESSION['pass']);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

$inser = $bdd->prepare('INSERT INTO info (classe, race, pseudo) VALUES(:classe, :race, :pseudo)');
$inser->bindParam(':classe', $classe);
$inser->bindParam(':race', $race);
$inser->bindParam(':pseudo', $pseudo);

$classe = "hunter";
$race = "Eds";
$pseudo = "Totor";
$inser->execute();
echo "La requête a été envoyée";

?>
</html>
</body>