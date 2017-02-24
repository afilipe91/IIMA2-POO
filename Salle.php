<?php

Class Salle{

    protected $portes;
    protected $monstres;
    protected $coffres;

    public function __construct($portes, $monstres, $coffres)
    {
        $this->portes = $portes;
        $this->monstres = $monstres;
        $this->coffres = $coffres;
    }

    public function creerMonstres($monstres){
        if($monstres > 0){
            for ($i = 0; $i < $monstres; $i++){
                $quelmonstre = rand(1,3);
                $gobelin = array();
                $maginoir = array();
                $dragon = array();
                $countmonstre = array();

                switch ($quelmonstre) {
                    case 1:
                        array_push($gobelin, new Gobelin('Gobelin', 50, rand(10,20), rand(10,20)));
                        continue;
                    case 2:
                        array_push($maginoir, new MagicienNoir('Magicien Noir', 100, rand(20,30), rand(20,30)));
                        continue;
                    case 3:
                        array_push($dragon, new Dragon('Dragon', 150, rand(30,40), rand(30,40)));
                        continue;
                }
            }
            $countmonstre = array_merge($dragon, $gobelin, $maginoir);


            echo 'Il y a '.count($countmonstre).' monstres dont '.count($gobelin).' gobelins, '.count($maginoir).' magiciens noir ' .count($dragon).' dragons.';
        }
        else{
            echo 'Cette salle ne contient aucun monstre';
        }
    }
    public function creerCaisses($coffres){
        if($coffres > 0){
            for ($i = 0; $i < $coffres; $i++){
                Coffre::contentCoffre(rand(1,2));
            }
            echo $coffres;
        }else{
            echo 'Il n\'y a pas de coffre';
        }
    }

    public function observer($coffres){
        if($coffres > 1){
            echo 'Il y a'.$this->coffres.' coffres';
        }
        else{
            echo 'Cette salle ne contient aucun coffre';
        }
    }
    public function ouvrirCoffre(){

    }
    public function avancer(){

    }
    public function attaquer(){

    }
    public function defendre(){

    }
    public function fuir(){

    }
    /**
     * @return mixed
     */
    public function getPortes()
    {
        return $this->portes;
    }

    /**
     * @param mixed $portes
     */
    public function setPortes($portes)
    {
        $this->portes = $portes;
    }

    /**
     * @return mixed
     */
    public function getMonstres()
    {
        return $this->monstres;
    }

    /**
     * @param mixed $monstres
     */
    public function setMonstres($monstres)
    {
        $this->monstres = $monstres;
    }

    /**
     * @return mixed
     */
    public function getCoffres()
    {
        return $this->coffres;
    }

    /**
     * @param mixed $coffres
     */
    public function setCoffres($coffres)
    {
        $this->coffres = $coffres;
    }

}