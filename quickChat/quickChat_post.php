<?php session_start() ?>
<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=quickChat;charset=utf8', 'root', $_SESSION['pass']);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO chat (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

header('Location: quickChat.php');
?>