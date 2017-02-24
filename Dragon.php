<?php

require_once ('Ennemies.php');
Class Dragon extends Ennemies {

    public function __construct($nom, $life, $defense, $attack)
    {
        parent::__construct(
            $this->nom = 'Dragon',
            $this->life = 150,
            $this->defense = rand(30,40),
            $this->attack = rand(30,40)
        );
    }

}