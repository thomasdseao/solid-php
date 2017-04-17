<?php

/**
 * Dependency Inversion Principle (Inversion des dépendances).
 *
 * Il faut dépendre des abstractions, pas des implémentations.
 * Possibilité de remplacer les dépendances injectées.
 * Nos dépendances doivent se faire sur des interfaces/contrats ou encore sur des classes abstraites plutôt que sur des classes "concrètes".
 *
 * L’injection de dépendances fournit un composant avec ses dépendances que ce soit via un constructeur,
 * des appels de méthodes ou la configuration de propriétés.
 * On sépare les dépendances en les contrôlant et en les instanciant ailleurs dans le système.
 * L’injection de dépendances nous permet d'injecter uniquement les dépendances dont nous avons besoin,
 * quand nous avons besoin et ceux sans avoir à écrire en dur quelques dépendances que ce soit.
 */

use Mailing\SendMail;
use Mailing\Mailers\SwiftMailer;
use Mailing\Mailers\PHPMailer;

require_once 'Mailing/Contracts/Mailers/MailerInterface.php';
require_once 'Mailing/Mailers/SwiftMailer.php';
require_once 'Mailing/Mailers/PHPMailer.php';
require_once 'Mailing/SendMail.php';

/**
 * Dans cette exemple, les Mailers "Mailing\Mailers\SwiftMailer" et "Mailing\Mailers\PHPMailer" implémentents
 * l'interface/contrat "Mailing\Contracts\Mailier\FormatterInterface".
 *
 * La classe "Mailing\SendMail" attend en dépendance dans son constructeur une classe qui
 * implémente l'interface/contrat "Mailing\Contracts\Mailier\FormatterInterface".
 *
 * Et on peut ensuite envoier le message avec la méthode "sendMessage" de la classe "Mailing\SendMail".
 *
 * Dans cette exemple on constate donc qu'on remplacer la dépendance injectée dans le constructeur de "Mailing\SendMail".
 */


$swiftMailer = new SwiftMailer();

$sendMail = new SendMail($swiftMailer);
// return string - Retourne le message de confirmation de SwiftMailer
var_dump($sendMail->sendMessage());


/**
 * On peut donc remplacer la dépendance injectée "Mailing\Mailers\SwiftMailer" par "Mailing\Mailers\PHPMailer".
 */


$phpMailer = new PHPMailer();

$sendMail = new SendMail($phpMailer);
// return string - Retourne le message de confirmation de PHPMailer
var_dump($sendMail->sendMessage());

