<?php

abstract class Personnage{

    protected $nom;
    protected $life;
    protected $defense;
    protected $attack;
    protected $magie;
    protected $arme;

    public function __construct($nom, $life, $attack, $defense, $magie, $arme)
    {
        $this->nom = $_POST['nom'];
        $this->life = $life;
        $this->defense = $defense;
        $this->magie = $magie;
        $this->attack = $attack;
        $this->arme = $arme;
    }

    public function epee(){
        $bonusArme = $this->attack + rand(10,50);
        echo 'épée.';
    }
    public function baton(){
        $def = $this->defense + rand(10,50);
        echo 'baton magique.';
    }
    public function potion(){
        $potion = $this->life + rand(50,100);
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * @param mixed $defense
     */
    public function setDefense($defense)
    {
        $this->defense = $defense;
    }

    /**
     * @return mixed
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @param mixed $attack
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    /**
     * @return mixed
     */
    public function getMagie()
    {
        return $this->magie;
    }

    /**
     * @param mixed $magie
     */
    public function setMagie($magie)
    {
        $this->magie = $magie;
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

    /**
     * @return mixed
     */
    public function getArme()
    {
        return $this->arme;
    }

    /**
     * @param mixed $arme
     */
    public function setArme($arme)
    {
        $this->arme = $arme;
    }



}