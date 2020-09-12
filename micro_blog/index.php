<?php
session_start();
include('hide.php');
?>
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
  <h1>Micro Blog</h1>

  <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', $_SESSION['pass']);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    $recover_tickets = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

    while($donnees = $recover_tickets->fetch()){
      ?>
        <div class="news">
          <h3>
            <?php echo htmlspecialchars($donnees['titre']); ?>
          </h3>

            <p>
              <?php
                echo nl2br(htmlspecialchars($donnees['contenu']));
              ?>
                <br />
                  <p>
                    <em><a href="commentaires.php?billet=<?php echo htmlspecialchars($donnees['id']); ?>">Commentaires</a></em>
                  </p>
            </p>
        </div>

      <?php
    }
    $recover_tickets->closeCursor();
  ?>
</body>
</html>