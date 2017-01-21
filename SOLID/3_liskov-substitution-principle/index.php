<?php

/**
 * Liskov Substitution Principle (Substitution de Liskov)
 *
 * Une instance de type T doit pouvoir être remplacée par une instance de type G, tel que G sous-type de T, sans que cela ne modifie la cohérence du programme
 * Les classes enfants ne devraient jamais casser les définitions de type des classe parents.
 */

require_once 'Quadrilateral.php';
require_once 'Rectangle.php';
require_once 'Square.php';
require_once 'Graphic.php';

$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(6);

$square = new Square();
$square->setWidth(4);
$square->setHeight(4);

var_dump($rectangle->getWidth());
var_dump($rectangle->getHeight());

var_dump($square->getWidth());
var_dump($square->getHeight());

echo '<hr>';

$graphic = new Graphic();
$graphic->resizeByPercentage($rectangle, 25);
$graphic->resizeByPercentage($square, 25);

var_dump($rectangle->getWidth());
var_dump($rectangle->getHeight());

var_dump($square->getWidth());
var_dump($square->getHeight());
