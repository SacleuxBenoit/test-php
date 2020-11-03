<?php
include('connection_database.php');

//  Send Input to database

if(!empty($_POST['nameInput'])){
    $sendInput = $bdd->prepare('INSERT INTO input(inputResult) VALUES(:nameInput)');
    $sendInput->bindParam(':nameInput', $_POST['nameInput']);
    $sendInput->execute();
    header('Location: index.php');
}

// Send input type radio to database

if(!empty($_POST['gender'])){
    $sendRadio = $bdd->prepare('INSERT INTO input(radioResult) VALUES(:gender)');
    $sendRadio->bindParam(':gender', $_POST['gender']);
    $sendRadio->execute();
    header('Location: index.php');
}

?>