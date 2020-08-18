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
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', "root", $_SESSION['pass']);
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    $blog = $bdd->query("SELECT titre, contenu FROM micro_blog");

    while($donnees = $blog->fetch()){
    ?>
    <div class="news">
        <h1>
            <?php echo $donnees['titre']?>
        </h1>
    </div>

    <p class="content">
    <?php echo $donnees['contenu'] ?>
    </p>

    <?php
    }

    ?>
</body>
</html>