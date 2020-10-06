<?php 
include('hide.php');

    try{
        $bdd = new PDO('mysql:host=localhost;dbname=jointuresBDD;charset=utf8', 'root', $_SESSION['pass']);
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    ?>