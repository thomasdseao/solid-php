<?php

/**
 * Dependency Inversion Principle (Inversion des dépendances)
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

