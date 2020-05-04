<?php

/**
 * Single Responsibility Principle (Responsabilité unique)
 */

require_once 'Article/Article.php';
require_once 'Article/Formatters/FormatterInterface.php';
require_once 'Article/Formatters/JsonFormatter.php';
require_once 'Article/Formatters/xmlFormatter.php';

use Article\Article;
use Article\Formatters\JsonFormatter;
use Article\Formatters\XmlFormatter;

/**
 * Dans cette exemple, les Formatters "Article\Formatters\JsonFormatter" et "Article\Formatters\XmlFormatter"
 * implémentent l'interface "Article\Formatters\FormatterInterface".
 * Ceci est utile pour s'assurer que la méthode "format" soit bien présente dans tout les "Formatters".
 *
 * Les méthodes "format" des Formatters attendent une instance de "Article\Article" en paramètre,
 * car ces Formatters doivent retourner avec la méthode "format" en réponse les données d'un "Article\Article" en leurs formats.
 *
 * Dans cette exemple on constate donc que chaque classe a bien qu'une seule responsabilité.
 */


$article = new Article();


$jsonFormatter = new JsonFormatter();

// return string - Retourne le contenu de l'article au format JSON
var_dump($jsonFormatter->format($article));


$xmlFormatter = new XmlFormatter();

// return string - Retourne le contenu de l'article au format XML
var_dump($xmlFormatter->format($article));
