<?php

/**
 * Single Responsibility Principle (Responsabilité unique)
 *
 * Une classe doit avoir une et une seule responsabilité
 * Une classe ne devrait avoir qu'une seule raison de changer
 */

require_once 'Article.php';
require_once 'FormatterInterface.php';
require_once 'JsonFormatter.php';
require_once 'xmlFormatter.php';

$article = new Article();

$jsonFormatter = new JsonFormatter();

$xmlFormatter = new XmlFormatter();

var_dump($jsonFormatter->format($article));

var_dump($xmlFormatter->format($article));
