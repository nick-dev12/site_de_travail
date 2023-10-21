<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

require '../vendor/autoload.php';

$mail = new PHPMailer( exceptions: true);

try {
    // Paramètres SMTP
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Activez la sortie de débogage verbose
    $mail->isSMTP(); // Utilisez SMTP pour envoyer
    $mail->Host = 'work-flexer.com'; // Serveur SMTP
    $mail->SMTPAuth = true; // Activez l'authentification SMTP
    $mail->Username = 'noreply-service@work-flexer.com'; // Nom d'utilisateur SMTP
    $mail->Password = 'VotreMotDePasse'; // Mot de passe SMTP
    $mail->SMTPSecure = 'ssl'; // Utilisez SSL
    $mail->Port = 465; // Port SMTP

    // Destinataires et contenu de l'e-mail
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User'); // Ajoutez un destinataire
    $mail->isHTML(true); // Définissez le format de l'e-mail comme HTML
    $mail->Subject = 'Ceci est le sujet';
    $mail->Body = 'Ceci est le corps du message HTML <b>en gras !</b>';
    $mail->AltBody = 'Ceci est le corps en texte brut pour les clients de messagerie non-HTML';

    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé. Erreur du Mailer : {$mail->ErrorInfo}";
}



?>