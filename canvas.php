<?php
require_once('point.php');
require_once('cercle.php');

class Canvas
{
    private $image;
    private int $white;
    private int $black;

    /*
     * Constructeur
     * Parametres :
     *      width: largeur du dessinable
     *      height : hauteur du dessinable
     */
    public function __construct(int $width, int $height)
    {
        $this->image = imagecreatetruecolor($width, $height);
        $this->black = imagecolorallocate($this->image, 0, 0, 0);
        $this->white = imagecolorallocate($this->image, 255, 255, 255);
        imagefill($this->image, 0, 0, $this->white);
    }

    /*
     *  Destructeur (sera appelé automatiquement à la fin du script)
     */
    public function __destruct()
    {
        imagedestroy($this->image);
    }

    /* 
     * Ajout d'un cercle dans le dessinable
     * Paramètre :
     *      cercle: Cercle, cercle à dessiner
     */
    public function drawCercle(Cercle $cercle)
    {
        $cercle->getCenter()->getPosition($centerX, $centerY);
        $diameter = 2 * $cercle->getRadius();
        imageellipse($this->image, $centerX, $centerY, $diameter, $diameter, $this->black);
    }

    /* 
     * Sortie dans un fichier (au format jpg) du dessinable
     * Paramètre :
     */
    public function output()
    {
        imagejpeg($this->image, 'images/geometric.jpg');
    }
}

?>