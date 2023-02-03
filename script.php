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
    include 'Figure.php';
    require 'Cercle.php';
    require 'Polygone.php';

        //Création de l'objet figure tirant ses propriétés de la classe parent
    $figure1 = new Figure();

            //Affichage des propriétés par défauts des Attributs
   echo 'Coordonnée X par défaut : ' .$figure1->cox;
   echo '<br> Coordonnée Y par défaut : ' .$figure1->coy;
   echo '<br> Couleur par défaut : ' .$figure1->col . '<br>';
    

            // Création de l'objet Cercle qui tient pour parent "Figure"
    $cercle = new Cercle();
        $cercle->setColor("01ffe8");
        $cercle->setPosition($newPositionX = [25,200], $newPositionY = [390,56]);
    
    var_dump($cercle);


?>


    
</body>
</html>