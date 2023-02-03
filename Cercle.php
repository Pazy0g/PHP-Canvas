<?php
            //Enfant de "Figure"
    class Cercle extends Figure{
            //Constantes
        protected float $rayon;
       
            //Constructeur
        public function __construct (string $col = "000000", float $cox = 150, float $coy = 150, float $rayon = 50) {
                parent::__construct($col,$cox,$coy);
                $this->rayon = $rayon;
        }
            //Méthodes
        public function setRadius (float $newRadius){
            $this->rayon = $newRadius;
        }

        public function __get($pName){
           return $this->$pName;
        }

        public function displayProperties(){
            echo "Couleur : ".$this->col."<br>";
            echo "Coordonnée X : ". $this->cox."<br>";
            echo "Coordonnée Y : ". $this->coy."<br>";
            echo "Rayon : ".$this->rayon."<br><br>";
        }
    }
?>