<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset:utf8', 'root', $_SESSION['pass']);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

if(empty($_POST['classe']) || empty($_POST['race']) || empty($_POST['pseudo'])){
    echo "Tous les champs n'ont pas été renseigné merci de revenir sur "?> <a href="prepared_Statement.php">cette page</a><?php
}
else{
$inser = $bdd->prepare('INSERT INTO info (classe, race, pseudo) VALUES(:classe, :race, :pseudo)');
    $inser->bindParam(':classe', $_POST['classe']);
    $inser->bindParam(':race',  $_POST['race']);
    $inser->bindParam(':pseudo', $_POST['pseudo']);
    $inser->execute();

        echo "Vous venez d'enregistrer dans la base de données : " . '<br />' . "<strong>Classe</strong> : "
        . htmlspecialchars($_POST['classe']) . '<br />' . "<strong>Race</strong> : "
        . htmlspecialchars($_POST['race']) . '<br />' . "<strong>Pseudo</strong> : "
        . htmlspecialchars($_POST['pseudo']) . '<br />';
}

    ?>
</body>
</html>