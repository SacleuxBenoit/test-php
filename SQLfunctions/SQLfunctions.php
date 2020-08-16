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
    
    echo "partie upper case :" . '<br />';

    $upper = $bdd->query('SELECT upper(nom) AS name_maj FROM jeux_video WHERE ID <=5');

    while($donnees = $upper->fetch()){
        echo $donnees['name_maj'] . '<br/>';
    }
    

    echo "partie length" . '<br />';

    $length = $bdd->query('SELECT LENGTH(nom) AS length_nom FROM jeux_video WHERE ID <= 5');
    
    while($result = $length->fetch()){
        echo $result['length_nom'] . '<br />';
    }
    ?>
    
   
    




</body>
</html>