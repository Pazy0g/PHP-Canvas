<?php
// ! child of "Figure"

//! Require point.php object class to replace the coordinates "x,y and the other points".
//* Using require_once to load the class once.
//? we need to make sure that it does exist and can be load before being able to use it. Else (fatal error).

require_once 'point.php';
require_once 'figure.php';

class Polygone extends Figure
{

    //* Constants of the class.
    protected Point $cote;
    protected Point $center;

    //* Constructor of the class.
    public function __construct(string $col, Point $cote, Point $centre)
    {
        parent::__construct($col, $centre);
        $this->cote = $cote;
    }

    //* Accessors
    public function getCote()
    {
        return $this->cote;
    }

    public function getCenter()
    {
        return $this->centre;
    }

    //*Setters
    public function move($dx, $dy)
    {
        $this->centre->move($dx, $dy);
    }

    public function rotate(Point $cr, float $angle)
    {
        $this->centre->rotate($cr, $angle);
    }

    public function addCote(Point $cote)
    {
        $this->cote = $cote;
    }

    public function getNbCotes()
    {
        return count($this->cotes);
    }

}





























?>