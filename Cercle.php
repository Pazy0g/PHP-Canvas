<?php
//! Child of "Figure"
class Cercle extends Figure
{
    //* Constants
    protected float $rayon;

    //* Constructor
    public function __construct(string $col, float $rayon = 50, Point $centre)
    {
        parent::__construct($col, $centre);
        $this->rayon = $rayon;
    }

    // * accessors

    public function getCenter()
    {
        return $this->centre;
    }

    public function getRadius()
    {
        return $this->rayon;
    }

    //* setters
    public function move($dx, $dy)
    {
        $this->centre->move($dx, $dy);
    }

    public function rotate(Point $cr, float $angle)
    {
        $this->centre->rotate($cr,$angle);
    }
}
?>