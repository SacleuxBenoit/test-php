<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<form action="quickChat_post.php"  method="post" >
    <p>
        <label for="pseudo">Pseudo </label>
        <input type="text" id="pseudo" name="pseudo">
    </p>
    <p>
        <label for="message">Message </label>
        <input type="text" id="message" name="message">
    </p>

    <p>
        <input type="submit" value="Envoyer">
    </p>
</form>
<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=quickChat;charset=utf8', 'root', $_SESSION['pass']);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT pseudo, message FROM chat ORDER BY ID LIMIT 0, 10');

while($donnees = $reponse->fetch()){
    echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : '
                       . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();
?>
</form>
</body>
</html>