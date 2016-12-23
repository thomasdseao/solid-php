<?php

/**
 * Open Closed Principle (Ouvert/fermé)
 *
 * Une classe doit être ouverte à l'extension, mais fermée à la modification
 */

require_once 'SportInterface.php';
require_once 'Football.php';
require_once 'Basketball.php';
require_once 'Sport.php';

$football = new Football();

$basketball = new Basketball();

$sport = new Sport();

var_dump($sport->rules($football));

var_dump($sport->rules($basketball));