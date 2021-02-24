<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <p>
            <input type="text" id="search" name="search">
            <button>Valider</button>
        </p>
    </form>

    <?php

        include('./database/connection_database.php');
        
        if(isset($_POST['search'])){
            $searchBar = $bdd->prepare('SELECT * from infos WHERE jeux = :getGame');
            $searchBar->bindParam(':getGame', $_POST['search']);
            $searchBar->execute();
    
            $display = $searchBar->fetch();
            
            echo $display['jeux'] . " " . $display['console'];
        }
    ?>
</body>
</html>