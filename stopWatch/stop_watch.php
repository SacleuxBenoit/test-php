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
    <link rel="stylesheet" href="./css/style.css">
    <title>stopWatch</title>
</head>
    <body>
        <header>
            <h1>StopWatch</h1>
        </header>

        <div>
            <button id="start">Commencer le chrono</button>
            <button id="pause" disabled>Pause</button>
            <button id="finish">Reset</button>
        </div>
    
</body>
</html>