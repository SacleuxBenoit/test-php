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

    <form method="post" action="cible.php">
    <label>votre pseudo :
        <input type="text" name="pseudo"/>
    </label>
       
    <p>
        <label>votre commentaire : <br/>
            <textarea name="message" rows="8" cols="45">
            </textarea>
        </label>
    </p>

    <p>
        <select name="country">
            <option>France</option>
            <option>U.S.A</option>
            <option>Belgique</option>
        </select>
    </p>
    <input type="submit" value="Valider"/>
      </form>
</body>
</html>