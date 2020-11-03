<?php
include('connection_database.php');

if(!empty($_POST['nameInput'])){
    $sendInput = $bdd->prepare('INSERT INTO input(inputResult) VALUES(:nameInput)');
    $sendInput->bindParam(':nameInput', $_POST['nameInput']);
    $sendInput->execute();
    header('Location: index.php');
}
?>