<?php
session_start(); 

try{
    $bdd = new PDO("mysql:host=localhost;dbname=testAccount;charset=utf8", "root", $_SESSION['pass']);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

$modif_account = $bdd->prepare('UPDATE Account SET :nom, :prenom, :email ');
$modif_account->bindParam(':nom', $_POST['last_name']);
$modif_account->bindParam(':prenom', $_POST['first_name']);
$modif_account->bindParam(':email', $_POST['email']);
$modif_account->execute();


?>