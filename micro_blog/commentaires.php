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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Micro blog</h1>

        <p>
            <a href="index.php">Retour à la liste pour les articles</a>
        </p>

<?php

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', $_SESSION['pass']);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $recover_tickets = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets WHERE id = ?');
    $recover_tickets->execute(array($_GET['billet']));
    $donnees = $recover_tickets->fetch();
?>


</body>
</html>