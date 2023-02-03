<?php
include_once "point.php";
    //Classe parent
class Figure{
            //* Constantes
        protected string $col;
        // protected float  $cox;
        // protected float $coy;
        protected Point $centre;

            // * Constructeur
    public function __construct (string $col='000000', Point $centre){
        $this->col = $col;
        $this->centre = $centre;

    }
                // * Méthodes
        public function __get ($pName){
            return $this->$pName;

        }

        public function setColor($newColor){
            $this-> col = $newColor;

        }

    // public function setPosition($newPositionX,$newPositionY){
    //     $this-> cox = $newPositionX;
    //     $this-> coy = $newPositionY;
    // }
}



?>