<?php
session_start();
include('hide.php');
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
        $bdd = new PDO('mysql:host=localhost;dbname=testJointures;charset=utf8', 'root', $_SESSION['pass']);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    $firstTest = $bdd->query('SELECT jeux_video.nom, proprietaires.prenom
                              FROM jeux_video,proprietaires 
                              WHERE jeux_video.ID_proprietaires = proprietaires.ID');
    ?>
</body>
</html>