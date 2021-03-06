<?php 
session_start();

$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['passwordConfirm'] = $_POST['passwordConfirm'];

// Connection to the database

try{
    $bdd = new PDO("mysql:host=localhost;dbname=testAccount;charset=utf8", "root", $_SESSION['pass']);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

// Verification if last_name, first_name, email is empty 

if(empty($_POST['last_name']) || empty($_POST['first_name']) || empty($_POST['email'])){
    header('Location: ./../index.php');
}
else{
    $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $req_inser = $bdd->prepare('INSERT INTO Account (nom, prenom, email, pass) VALUES(:nom, :prenom, :email, :hash_pass)');
    $req_inser->bindParam(':nom', $_POST['last_name']);
    $req_inser->bindParam(':prenom', $_POST['first_name']);
    $req_inser->bindParam(':email', $_POST['email']);
    $req_inser->bindParam(':hash_pass', $pass_hash);
    $req_inser->execute();
    
    header('Location: ./../hello.php');
}

// Verification if the password are the same or not

if($_POST['password'] != $_POST['passwordConfirm']){
    header('Location: ./../index.php');
}
?>