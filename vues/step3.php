<?php

session_start();

require_once ('../MagiNoir.php');
require_once ('../Gobelin.php');
require_once ('../Dragon.php');
require_once ('../Salle.php');

$type = $_POST['type'];
$nom = $_POST['nom'];

$_SESSION['type'] = $type;
$_SESSION['nom'] = $nom;

$monstres = rand(5,9);
$salle = new Salle(rand(1,3), $monstres, rand(0,1));
$salle->creerMonstres($monstres);
$salle->creerCaisses(rand(1,2));

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etape 3</title>
</head>
<body>
<hr>
<a href="destroy.php">STOP SESSION</a>
</body>
</html>
