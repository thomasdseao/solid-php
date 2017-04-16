<?php

/**
 * Interface Segregation Principle (Ségrégation des interfaces)
 *
 * Préférer plusieurs interfaces spécifiques pour chaque client plutôt qu'une seule interface générale
 */

require_once 'JobInterface.php';
require_once 'CodeInterface.php';
require_once 'Developer.php';
require_once 'DesignInterface.php';
require_once 'Webdesigner.php';
require_once 'Employee.php';

$developer = new Developer();

$webdesigner = new Webdesigner();

$employee = new Employee();

var_dump($employee->action($developer));
var_dump($employee->action($webdesigner));
