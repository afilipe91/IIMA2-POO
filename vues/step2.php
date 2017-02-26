<?php

session_start();

require_once ('../Paladin.php');
require_once ('../Magicien.php');
require_once ('../Guerrier.php');
require_once ('../MagiNoir.php');
require_once ('../Gobelin.php');
require_once ('../Dragon.php');
require_once ('../Salle.php');

$type = $_POST['type'];
$nom = $_POST['nom'];

$_SESSION['type'] = $type;
$_SESSION['nom'] = $nom;

switch ($type){
    case 'guerrier' :
        if(isset($nom)){
            $guerrier = new Guerrier($nom, 100, rand(20,80), rand(20,80), 0, '');
            $guerrier->stats();
            $guerrier->epee();

        }else{
            echo 'Merci de renseigner les options de votre personnage';
        }
        break;
    case 'magicien' :
        if(isset($nom)){
            $magicien = new Magicien($nom, 100, 0, rand(20,80) , rand(20,80), '');
            $magicien->stats();
            $magicien->baton();

        }else{
            echo 'Merci de renseigner les options de votre personnage';
        }
        break;
    case 'paladin' :
        if(isset($nom)){
            $paladin = new Paladin($nom, 100, rand(20,60), rand(0,40),rand(20,60), '');
            $paladin->stats();

        }else{
            echo 'Merci de renseigner les options de votre personnage';
        }
        break;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Etape 2</title>
</head>
<body>
<br><a href="step3.php">Entrez dans une salle</a>
<hr>
    <a href="destroy.php">STOP SESSION</a>
</body>
</html>
