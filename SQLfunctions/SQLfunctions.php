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


    echo "average price" . '<br />';

    $average = $bdd->query('SELECT AVG(prix) AS AVG_price FROM jeux_video');
    $resultAVG = $average->fetch();
    echo "le prix moyen des jeux est de : " . $resultAVG['AVG_price'] . " Euros";


    echo "SUM for the price of every game" . '<br />';

    $SUMprice = $bdd->query('SELECT SUM(prix) AS SUM_price FROM jeux_video');
    $resultSUM = $SUMprice->fetch();
    echo "le prix total de tous les jeux est de : " .$resultSUM['SUM_price'] . " Euros.";

    ?>
    
   
    




</body>
</html>