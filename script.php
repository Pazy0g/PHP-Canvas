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
include_once 'point.php';
include_once 'Figure.php';
include_once 'Cercle.php';
include_once 'Polygone.php';

//Création de l'objet figure tirant ses propriétés de la classe parent
//$centre = new Point(50,50);


 // ? don't seems to work properly something to fix around here or in point.php




$figure1 = new Figure("01ffe8", new Point(502, 062));
echo  var_dump($figure1);
//Affichage des propriétés par défauts des Attributs
// Création de l'objet Cercle qui tient pour parent "Figure"
// $cercle = new Cercle();
// $cercle->displayProperties();



// //Changement des propriétés
// $cercle->setColor("01ffe8");
// $cercle->setPosition(25, 390);


// print_r($cercle);


?>


    
</body>
</html>