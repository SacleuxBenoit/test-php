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
    }
    catch(Exception $e){
        die("Error :" .$e->getMessage());
    }
    
    $reponse = $bdd->query('SELECT upper(nom) AS name_maj FROM jeux_video');

    while($donnees = $reponse->fetch()){
        echo $donnees['name_maj'] . '<br/>';
    }
    
    ?>
    
   
    




</body>
</html>