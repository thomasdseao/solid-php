<?php

/**
 * Liskov Substitution Principle (Substitution de Liskov).
 */

require_once 'Graphic/Quadrilaterals/Quadrilateral.php';
require_once 'Graphic/Quadrilaterals/Rectangle.php';
require_once 'Graphic/Quadrilaterals/Square.php';
require_once 'Graphic/Graphic.php';

use Graphic\Quadrilaterals\Rectangle;
use Graphic\Quadrilaterals\Square;
use Graphic\Graphic;

/**
 * Dans cette exemple, les Quadrilaterals "Graphic/Quadrilaterals/Rectangle" et "Graphic/Quadrilaterals/Square"
 * sont des enfants de la classe "Graphic/Quadrilaterals/Quadrilateral".
 *
 * La méthode "resizeByPercentage" de la classe "Graphic\Graphic" attend en 1er paramètre un enfant
 * de la classe "Graphic/Quadrilaterals/Quadrilateral".
 *
 * Dans cette exemple on constate donc que dans "resizeByPercentage" on peut donc
 * remplacer "Graphic/Quadrilaterals/Rectangle" par "Graphic/Quadrilaterals/Square"
 * et vice versa sans que cela ne modifie la cohérence du programme.
 */


$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(6);

$square = new Square();
$square->setWidth(4);
$square->setHeight(4);

// return int - Largeur du Rectangle
var_dump($rectangle->getWidth());
// return int - Hauteur du Rectangle
var_dump($rectangle->getHeight());

// return int - Largeur du Square
var_dump($square->getWidth());
// return int - Hauteur du Square
var_dump($square->getHeight());


echo '<hr>';


$graphic = new Graphic();
$graphic->resizeByPercentage($rectangle, 25);
$graphic->resizeByPercentage($square, 25);

// return int - Largeur du Rectangle modifiée avec "resizeByPercentage"
var_dump($rectangle->getWidth());
// return int - Hauteur du Rectangle modifiée avec "resizeByPercentage"
var_dump($rectangle->getHeight());

// return int - Largeur du Square modifiée avec "resizeByPercentage"
var_dump($square->getWidth());
// return int - Hauteur du Square modifiée avec "resizeByPercentage"
var_dump($square->getHeight());
