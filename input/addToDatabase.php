<?php
include('connection_database.php');

//  Send Input  && input type radio to database

/* i/f(!empty($_POST['nameInput']) && !empty($_POST['gender'])){
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
    $sendDate->bindParam(':dateResult',$_POST['content'],PDO::PARAM_STR);
    $sendDate->execute();


$selectDate = $bdd->prepare('SELECT * FROM input WHERE lundi = :day');
$selectDate->bindParam(':day', $_POST['day']);
$selectDate->execute();

while($displayGame = $selectDate->fetch()){
    echo $displayGame['lundi'];
} 

// Another test with dropDown

    $sendDatabase = $bdd->prepare('INSERT INTO dropdown(:week) VALUES(:content)');
    $sendDatabase->bindParam(':week', $_POST['day']);
    $sendDatabase->bindParam(':content', $_POST['content']);
    $sendDatabase->execute();

        $sendDatabase = $bdd->prepare('INSERT INTO dropdown(lundi) VALUES(:content)');
    $sendDatabase->bindParam(':content', $_POST['content']);
    $sendDatabase->execute();
 

    // NOT WORKING
    $sendDatabase = $bdd->prepare('INSERT INTO dropdown(:week) VALUES(:content)');
    $sendDatabase->bindParam(':week', $_POST['day']);
    $sendDatabase->bindParam(':content', $_POST['content']);
    $sendDatabase->execute();
       */

       if($_POST['day'] == 'lundi'){
        $sendDatabase = $bdd->prepare('INSERT INTO dropdown(lundi) VALUES(:content)');
        $sendDatabase->bindParam(':content', $_POST['content']);
        $sendDatabase->execute();
       }
       else if($_POST['day'] == 'mardi'){
        $sendDatabase = $bdd->prepare('INSERT INTO dropdown(mardi) VALUES(:content)');
        $sendDatabase->bindParam(':content', $_POST['content']);
        $sendDatabase->execute();
       }
       else if($_POST['day'] == 'mercredi'){
        $sendDatabase = $bdd->prepare('INSERT INTO dropdown(mercredi) VALUES(:content)');
        $sendDatabase->bindParam(':content', $_POST['content']);
        $sendDatabase->execute();
       }
       else if($_POST['day'] == 'jeudi'){
        $sendDatabase = $bdd->prepare('INSERT INTO dropdown(jeudi) VALUES(:content)');
        $sendDatabase->bindParam(':content', $_POST['content']);
        $sendDatabase->execute();
       }
       else if($_POST['day'] == 'vendredi'){
        $sendDatabase = $bdd->prepare('INSERT INTO dropdown(vendredi) VALUES(:content)');
        $sendDatabase->bindParam(':content', $_POST['content']);
        $sendDatabase->execute();
       }
       else if($_POST['day'] == 'samedi'){
        $sendDatabase = $bdd->prepare('INSERT INTO dropdown(samedi) VALUES(:content)');
        $sendDatabase->bindParam(':content', $_POST['content']);
        $sendDatabase->execute();
       }
       else if($_POST['day'] == 'dimanche'){
        $sendDatabase = $bdd->prepare('INSERT INTO dropdown(dimanche) VALUES(:content)');
        $sendDatabase->bindParam(':content', $_POST['content']);
        $sendDatabase->execute();
       }
?>