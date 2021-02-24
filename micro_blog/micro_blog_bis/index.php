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
    <title>Document</title>
</head>
<body>
    <?php
        include('connection_database.php');

        $get_ticket = $bdd->query('SELECT id,titre,contenu FROM billets');

        while($content = $get_ticket->fetch()){
        ?>
            <div>
                <h3><?php echo htmlspecialchars($content['titre']) ?></h3>

                <p><?php echo htmlspecialchars($content['contenu']) ?></p>

                <p><a href="comments.php?billet=<?php echo htmlspecialchars($content['id']);?>">see more</a></p>
            </div>
        <?php
        }
    ?>  
</body>
</html>