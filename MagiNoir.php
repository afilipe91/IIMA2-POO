<?php

require_once ('Ennemies.php');
Class MagicienNoir extends Ennemies {

    public function __construct($nom, $life, $defense, $attack)
    {
        parent::__construct(
            $this->nom = 'Magicien Noir',
            $this->life = 100,
            $this->defense = rand(20,30),
            $this->attack = rand(20,30)
        );
    }

}