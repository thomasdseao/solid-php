<?php

/**
 * Interface Segregation Principle (Ségrégation des interfaces)
 */

require_once 'Worker/Jobs/JobInterface.php';
require_once 'Worker/Jobs/Developer/CodeInterface.php';
require_once 'Worker/Jobs/Developer/Developer.php';
require_once 'Worker/Jobs/Webdesigner/DesignInterface.php';
require_once 'Worker/Jobs/Webdesigner/Webdesigner.php';
require_once 'Worker/Employee.php';

use Worker\Jobs\Developer\Developer;
use Worker\Jobs\Webdesigner\Webdesigner;
use Worker\Employee;

/**
 * Dans cette exemple, les Jobs "Worker\Jobs\Developer\Developer" et "Worker\Jobs\Webdesigner\Webdesigner"
 * implémente une interface spécifique à leur métier,
 * Et cette interface hérite elle même l'interface "Worker\Jobs\JobInterface"
 * qui est une interface + gérérique.
 *
 * La méthode "action" de la classe "Worker\Employee" attend une classe qui implémente
 * l'interface "Worker\Jobs\JobInterface".
 *
 * Dans cette exemple on constate donc que chaque que chaque classe a une interface spécifique
 * qui elles mêmes peuvent étendrent d'une interface + générique.
 */


$employee = new Employee();


$developer = new Developer();

// return string - action (métier + action de ce metier)
var_dump($employee->action($developer));


$webdesigner = new Webdesigner();

// return string - action (métier + action de ce metier)
var_dump($employee->action($webdesigner));
