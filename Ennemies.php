<?php

abstract class Ennemies{

    protected $nom;
    protected $life;
    protected $defense;
    protected $attack;

    public function __construct($nom, $life, $defense, $attack)
    {
        $this->nom = $nom;
        $this->life = $life;
        $this->defense = $defense;
        $this->attack = $attack;
    }

    /**
     * @return mixed
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param mixed $life
     */
    public function setLife($life)
    {
        $this->life = $life;
    }

}