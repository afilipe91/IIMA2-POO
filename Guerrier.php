<?php
require_once ('Personnage.php');

Class Guerrier extends Personnage {

    public function updateGuerrier(){

    }
    public function stats(){
        echo 'Je suis '.$this->nom.' le <strong>Guerrier</strong> que tu as choisi. J\'ai ' .$this->life. ' pts de vie, '
            .$this->attack.' pts d\'attaque, '.$this->defense.' pts de defense, '.$this->magie.' pts de magie et mon arme est une '
            .$this->arme.'<br>';
    }
}