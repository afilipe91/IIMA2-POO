<?php
require_once ('Personnage.php');

Class Magicien extends Personnage {

    public function updateGuerrier(){

    }
    public function stats(){
        echo 'Je suis '.$this->nom.' le <strong>Magicien</strong> que tu as choisi. J\'ai ' .$this->life. ' pts de vie, '
            .$this->attack.' pts d\'attaque, '.$this->defense.' pts de defense, '.$this->magie.' pts de magie et mon arme est un '
            .$this->arme.'<br>';
    }
}