<?php

/**
 * Open Closed Principle (Ouvert/fermé)
 */

require_once 'Sport/Sports/SportInterface.php';
require_once 'Sport/Sports/Football.php';
require_once 'Sport/Sports/Basketball.php';
require_once 'Sport/Sport.php';

use Sport\Sport;
use Sport\Sports\Football;
use Sport\Sports\Basketball;

/**
 * Dans cette exemple, les Sports "Sport/Sports/Football" et "Sport/Sports/Basketball" implémentent
 * l'interface "Sport/Sports/SportInterface".
 * Ceci est utile pour s'assurer que les méthode "name" et "rules" soient bien présentes dans tout les Sports.
 *
 * La méthone "rules" de la classe "Sport/Sport" attend en paramètre une classe qui implémente
 * l'interface "Sport/Sports/SportInterface" pour retourner en réponse les règles d'un Sport.
 *
 * Dans cette exemple on constate donc que les classes "Sport/Sports/Football" et "Sport/Sports/Basketball"
 * sont bien ouvertes à l'exentions (qu'on peut ajouter des comportements...) et fermées à la modification.
 */


$sport = new Sport();


$football = new Football();

// return string - Règles du football
var_dump($sport->rules($football));


$basketball = new Basketball();

// return string - Règles du basketball
var_dump($sport->rules($basketball));
