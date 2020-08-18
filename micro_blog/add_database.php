<?php session_start() ?>
<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', $_SESSION['pass']);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO micro_blog (titre, contenu) VALUES(?, ?)');
$req->execute(array($_POST['titre'], $_POST['contenu']));

header('Location: blog.php');
?>