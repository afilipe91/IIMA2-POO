<?php
require_once ('Personnage.php');
Class Coffre{
    public static function contentCoffre($gift){
        $gift = rand(1,2);

        switch ($gift){
            case 1:
                Personnage::epee();
                break;

            case 2:
                Personnage::baton();
                break;
        }
    }
}