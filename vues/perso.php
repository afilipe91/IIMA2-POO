<?php

session_start();

require_once ('../Paladin.php');
require_once ('../Magicien.php');
require_once ('../Guerrier.php');

$type = $_POST['type'];
$nom = $_POST['nom'];

$_SESSION['type'] = $type;
$_SESSION['nom'] = $nom;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choisir votre personnage</title>
</head>
<body>

    <h1>Choisir votre personnage</h1>

    <form method="POST" action="step2.php">
        <label>Nom de ton Guerrier :</label>
        <input type="text" name="nom">
        <select name="type">
            <option value="guerrier">Guerrier</option>
            <option value="magicien">Magicien</option>
            <option value="paladin">Paladin</option>
        </select>
        <button type="submit">Choisir</button>
    </form>
</body>
</html>
