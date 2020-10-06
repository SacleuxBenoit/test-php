<?php
include('connection_database.php');

if(!empty($_POST['nom']) && !empty($_POST['nom'])){
    $send = $bdd->prepare('INSERT INTO info(nom,prenom) VALUES(:nom, :prenom)');
    $send->bindParam(':nom', $_POST['nom']);
    $send->bindParam(':prenom', $_POST['prenom']);
    $send->execute();
    header('Location: pushData.php');
}else{
    echo "an error as occured";
}


?>