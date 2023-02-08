<?php
//! Child of "Figure"
class Cercle extends Figure
{
    //* Constants of the class.
    protected float $rayon;

    //* Constructor
    public function __construct(string $col, float $rayon = 50, Point $centre)
    {
        parent::__construct($col, $centre);
        $this->rayon = $rayon;
    }

    // * Accessors
    public function getCenter()
    {
        return $this->centre;        
    }

    public function getRadius()
    {
        return $this->rayon;
    }

    //* Setters
    public function move($dx, $dy)
    {
        $this->centre->move($dx, $dy);
    }

    public function rotate(Point $cr, float $angle)
    {
        $this->centre->rotate($cr, $angle);
    }
}
?>