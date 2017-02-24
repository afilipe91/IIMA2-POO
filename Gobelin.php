<?php

require_once ('Ennemies.php');
Class Gobelin extends Ennemies {

public function __construct($nom, $life, $defense, $attack)
{
    parent::__construct(
        $this->nom = 'Gobelin',
        $this->life = 50,
        $this->defense = rand(10,20),
        $this->attack = rand(10,20)
    );
}

}