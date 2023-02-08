<?php

//! Point is a replacement for "x" and "y" coordinates.
//* More useful code for the Polygone object.
class Point
{

    //* Constants
    private float $x;
    private float $y;

    //* Constructor
    public function __construct($x = 0, $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
    }

    //* Accessors
    // TODO These can also be done with magics methods.
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    //* reference method
    public function getPosition(&$x, &$y)
    {
        $x = $this->x;
        $y = $this->y;
        return;
    }

    public function move($dx, $dy)
    {
        $this->x += $dx;
        $this->y += $dy;
    }

    //* Setters
    function setPosition($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function rotate(Point $cr, float $angle)
    {
        $angleRad = deg2rad($angle);
        $xM = $this->x - $cr->x;
        $yM = $this->y - $cr->y;
        $this->x = $xM * cos($angleRad) + $yM * sin($angleRad) + $cr->x;
        $this->y = -$xM * sin($angleRad) + $yM * cos($angleRad) + $cr->y;
    }
}
?>
