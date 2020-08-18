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

<form action="add_database.php" method="post" >
    <p>
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre">
    </p>
    <p>
        <label for="contenu">Contenu</label>
        <input type="text" id="contenu" name="contenu">
    </p>

    <p>
        <input type="submit" value="Envoyer">
    </p>
</form>

   <?php 
    
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', "root", $_SESSION['pass']);
    }catch(Exception $e){
        die('Erreur : ' . $e->getcontenu());
    }
    ?>
</body>
</html>