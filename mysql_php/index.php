<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', $_SESSION['pass']);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$response = $bdd->query('SELECT * FROM jeux_video ORDER BY prix');

while($donnees = $response->fetch()){
    ?>
    <p>
        <strong>Jeux : </strong> <?php echo $donnees['nom'] ?> <br /> est possédé par :
        <?php 
            echo $donnees['possesseur']
        ?>, il est disponible sur 
        
        <?php echo $donnees['console']; ?> pour 
        
        <?php echo $donnees['prix'] ?> euros. <br />

        son commentaire est le suivant : 
        <?php echo $donnees['commentaires']?>
    </p>
<?php 
}
$response->closeCursor();
?>
</body>
</html>