<?php
session_start();
include('pass.php');
include('connection_database.php');
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
        $get_data = $bdd->query('SELECT * FROM firstTable,secondTable');
        while($display_data = $get_data->fetch()){
            echo '<p>' . $display_data['firstTitle'] . " " . $display_data['secondTitle'] . '</p>';
        };

    ?>
</body>
</html>