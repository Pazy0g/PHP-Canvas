<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    // ! Including all the files needed to use each Figures.
    // * Include_once to make sure there's no duplicated files or redondance.
    include_once 'Figure.php';
    include_once 'cercle.php';
    include_once 'Polygone.php';
    require_once 'canvas.php';

    //* Create a canvas object

    $width = 500;
    $height = 500;
    $canvas = new Canvas($width, $height);

    //* Create a circle with radius of 50 and a center of (100,100)

    $cercle1 = new Cercle('EEEEEE',200,  new Point(100, 100));
    // Create a circle with radius of 50 and a center of (35,68)
    $cercle2 = new Cercle('0000FF',50,  new Point(35, 68));
    $cercle3 = new Cercle('FFFFFF',95,  new Point(200, 134));
    $cercle4 = new Cercle('FFFFFF',95,  new Point(200, 134)); 
    $cercle4->rotate(new Point(0, 180),-50);

    //* Add the cercles to the canvas

    $canvas->drawCercle($cercle1);
    $canvas->drawCercle($cercle2);
    $canvas->drawCercle($cercle3);
    $canvas->drawCercle($cercle4);

    //! generate and save the image into the image folder
    $canvas->output();


    ?>



</body>

</html>