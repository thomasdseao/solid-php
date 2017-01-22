<?php

/**
 * Dependency Inversion Principle (Inversion des dépendances)
 *
 * Il faut dépendre des abstractions, pas des implémentations
 * Possibilité de remplacer les dépendances injectées.
 * Nos dépendances doivent se faire sur des interfaces/contrats ou encore sur des classes abstraites plutôt que sur des classes “concrètes”.
 *
 * L’injection de dépendances fournit un composant avec ses dépendances que ce soit via un constructeur,
 * des appels de méthodes ou la configuration de propriétés.
 * On sépare les dépendances en les contrôlant et en les instanciant ailleurs dans le système.
 * L’injection de dépendances nous permet d'injecter uniquement les dépendances dont nous avons besoin,
 * quand nous avons besoin et ceux sans avoir à écrire en dur quelques dépendances que ce soit.
 */

require_once 'MailerInterface.php';
require_once 'SwiftMailer.php';
require_once 'PHPMailer.php';
require_once 'SendMail.php';

$swiftMailer = new SwiftMailer();

$phpMailer = new PHPMailer();

$sendMail = new SendMail($swiftMailer);
var_dump($sendMail->sendMessage());

$sendMail = new SendMail($phpMailer);
var_dump($sendMail->sendMessage());
