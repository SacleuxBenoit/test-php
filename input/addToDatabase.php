<?php
include('connection_database.php');

//  Send Input  && input type radio to database

if(!empty($_POST['nameInput']) && !empty($_POST['gender'])){
    $sendInput = $bdd->prepare('INSERT INTO input(inputResult,radioResult) VALUES(:nameInput, :gender)');
    $sendInput->bindParam(':nameInput', $_POST['nameInput']);
    $sendInput->bindParam(':gender', $_POST['gender']);
    $sendInput->execute();
    header('Location: index.php');
}
    
if(!empty($_POST['game'])){
    $game = $_POST['game'];
    $selectGame = $bdd->query('SELECT * FROM game');
    $selectGame->execute();

    while($displayGame = $selectGame->fetch()){
        echo $displayGame['game'] . '<br>';
    }
}

    $sendDate = $bdd->prepare('INSERT INTO input(dateResult) VALUES(:dateResult)');
    $sendDate->bindParam(':dateResult',$_POST['date'],PDO::PARAM_STR);
    $sendDate->execute();
?>