<?php
session_start();
include('connection_database.php');
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];

if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
    $sendToDatabase = $bdd->prepare('INSERT INTO sess(nom,prenom) VALUES(:nom, :prenom)');
    $sendToDatabase->bindParam(':nom', $_SESSION['nom']);
    $sendToDatabase->bindParam(':prenom', $_SESSION['prenom']);
    $sendToDatabase->execute();

    header('Location: home.php');
}else{
    header('Location: index.php');
}


?>
