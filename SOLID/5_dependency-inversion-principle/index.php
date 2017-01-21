<?php

/**
 * Dependency Inversion Principle (Inversion des dépendances)
 *
 * Il faut dépendre des abstractions, pas des implémentations
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
