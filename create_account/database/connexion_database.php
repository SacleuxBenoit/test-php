<?php
session_start();

try{
    $bdd = new PDO("mysql:host=localhost;dbname=testAccount;charset=utf8", "root", $_SESSION['pass']);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

$reqConnection = $bdd->query('SELECT email,pass FROM Account WHERE email = :email ');
$reqConnection->bindParam(':email', $_POST['loginEmail']);
$reqConnection->execute();
$donnees = $reqConnection->fetch();

    /*if($_POST['loginEmail'] == $donnees['email'] && $_POST['loginPassword'] == $donnees['pass']){
        header('Location: ./../home.php');
    }else{
        header('Location: ./../login.php');
    }

    if(password_verify($_POST["loginPassword"],$donnees['pass']))
    echo "Welcome"; 

    else
    echo $donnees['pass'];*/
?>

