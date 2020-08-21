<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="result_prepared_Statement.php">
    <p>
        <label for="classe">Classe</label>
        <input type="text" id="classe" name="classe">
    </p>

    <p>
        <label for="race">Race</label>
        <input type="text" id="race" name="race">
    </p>

    <p>
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo">
    </p>

    <p>
        <input type="submit" value="Submit">
    </p>
</form>


<?php
/*try{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', $_SESSION['pass']);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}

// préparation de la requête + add bindParam
$inser = $bdd->prepare('INSERT INTO info (classe, race, pseudo) VALUES(:classe, :race, :pseudo)');
$inser->bindParam(':classe', $classe);
$inser->bindParam(':race', $race);
$inser->bindParam(':pseudo', $pseudo);

$classe = "hunter";
$race = "Eds";
$pseudo = "Totor";
$inser->execute();
echo "La requête a été envoyée";*/
?>

</body>
</html>