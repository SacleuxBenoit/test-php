<?php
session_start();
setcookie('user_email', $_POST['loginEmail'], time() + 24 * 3600);

try{
    $bdd = new PDO("mysql:host=localhost;dbname=testAccount;charset=utf8", "root", $_SESSION['pass']);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

$reqConnection = $bdd->prepare('SELECT email,pass FROM Account WHERE email = :email ');
$reqConnection->bindParam(':email', $_POST['loginEmail']);
$reqConnection->execute();
$donnees = $reqConnection->fetch();


    if($_POST['loginEmail'] == $donnees['email'] && password_verify($_POST["loginPassword"],$donnees['pass'])){
        header('Location: ./../home.php');
    }else{
        header('Location: ./../login.php');
    }
?>

