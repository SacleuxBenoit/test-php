<?php
include('connection_database.php');

if(!empty($_POST['nameGame']) && !empty($_POST['console'])){
    $sendGame = $bdd->prepare('INSERT INTO jeux(nom,console) VALUES(:nameGame, :console)');
    $sendGame->bindParam(':nameGame', $_POST['nameGame']);
    $sendGame->bindParam(':console', $_POST['console']);
    $sendGame->execute();
    header('Location: pushData.php');
}else{
    echo "an error as occured";
}


?>