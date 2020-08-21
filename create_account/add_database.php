<?php 
session_start();

try{
    $bdd = new PDO("mysql:host=localhost;dbname=testAccount;charset=utf8", "root", $_SESSION['pass']);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

$req_inser = $bdd->prepare('INSERT INTO Account (nom, prenom, email, pass) VALUES(:nom, :prenom, :email, :hash_pass)');
$req_inser->bindParam(':nom', $_POST['last_name']);
$req_inser->bindParam(':prenom', $_POST['first_name']);
$req_inser->bindParam(':email', $_POST['email']);
$req_inser->bindParam(':hash_pass', $_POST['password']);
$req_inser->execute();

header('Location: hello.php');

?>