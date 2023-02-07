<?php

//! Require point.php object class to replace the coordinates "x,y".
//* Using require_once to load the class once.
//? we need to make sure that it does exist and can be load before being able to use the "Figure" class. Else (fatal error).

require_once "point.php";

//! parent class

class Figure
{

    //* Constants
    protected string $col;
    protected Point $centre;

    // * Constructor
    public function __construct(string $col = '000000', Point $centre = null)
    {
        $this->col = $col;
        $this->centre = $centre;
    }

    //* Accessors
    public function __get($pName)
    {
        return $this->$pName;
    }

    // * setters

    public function __set($pName, $pValue)
    {
        $this->$pName = $pValue;
    }
}



?>