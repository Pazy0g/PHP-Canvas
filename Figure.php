<?php

    //Classe parent
class Figure{
            //Constantes
        private string $col;
        private  $cox;
        private  $coy;

            //Constructeur
    public function __construct ($col='000000',$cox=150,$coy=150){
        $this-> col = $col;
        $this-> cox = $cox;
        $this-> coy = $coy;

    }
                //Méthodes
        public function __get ($pName){
            return $this->$pName;

        }

        public function setColor($newColor){
            $this-> col = $newColor;

        }

    public function setPosition($newPositionX,$newPositionY){
        $this-> cox = $newPositionX;
        $this-> coy = $newPositionY;

    }
}



?>