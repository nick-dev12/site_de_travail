<?php
require_once('..//entreprise/app/model/entreprise.php');

// include('../model/vue_offre.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

if (isset($_SESSION['compte_entreprise'])) {
    $getEntreprise = getEntreprise($db, $_SESSION['compte_entreprise']);

    $selecteOffre = selectOffre($db, $getEntreprise['id']);

    $afficheOffreEmplois = getOffresEmplois($db, $getEntreprise['id']);

}

if (isset($_POST['publier'])) {

    $poste = $mission = $profil = $metier = $contrat = $etudes = $regions = $experience = $langues = '';

    $entreprise_id = $getEntreprise['id'];

    if (empty($_POST['poste'])) {
        $_SESSION['error_message'] = 'veuiller ajouter le poste disponible !!!';
    } else {
        $poste = $_POST['poste'];
    }

    if (empty($_POST['mission'])) {
        $_SESSION['error_message'] = 'veuiller ajouter les mission correspondant au prolil !!!';
    } else {
        $mission = $_POST['mission'];
    }

    if (empty($_POST['profil'])) {
        $_SESSION['error_message'] = 'veuiller ajouter les criteres du profil rechercher  !!!';
    } else {
        $profil = $_POST['profil'];
    }

    if (empty($_POST['metier'])) {
        $_SESSION['error_message'] = 'veuiller ajouter le metier !!!';
    } else {
        $metier = $_POST['metier'];
    }

    if (empty($_POST['contrat'])) {
        $_SESSION['error_message'] = 'veuiller ajouter le type de contrat  !!!';
    } else {
        $contrat = $_POST['contrat'];
    }

    if (empty($_POST['etude'])) {
        $_SESSION['error_message'] = 'veuiller ajouter le niveau de etude  !!!';
    } else {
        $etudes = $_POST['etude'];
    }


    if (empty($_POST['experience'])) {
        $_SESSION['error_message'] = 'veuiller ajouter un niveau d\'experience  !!!';
    } else {
        $experience = $_POST['experience'];
    }

    if (empty($_POST['localite'])) {
        $_SESSION['error_message'] = 'veuiller ajouter une localiter !!!';
    } else {
        $localite = $_POST['localite'];
    }

    if (empty($_POST['langues'])) {
        $_SESSION['error_message'] = 'veuiller ajouter la ou les langues exiger  !!!';
    } else {
        $langues = $_POST['langues'];
    }

    $categorie = $getEntreprise['categorie'];
    if (empty($categorie)) {
        $_SESSION['error_message'] = 'aucune categorie trouver !!!';
    }
    $date = date("j , F, Y, g:i a");

    if (empty($_SESSION['error_message'])) {
        if (postOffres($db, $entreprise_id, $poste, $mission, $profil, $metier, $contrat, $etudes, $experience, $localite, $langues, $categorie, $date)) {
            $_SESSION['success_message'] = 'Offre d\'emploi publiée avec succès';

            // Créez l'instance PHPMailer
            $mail = new PHPMailer(true);

            try {
                // Paramètres SMTP
                $mail->isSMTP();
                $mail->Host = 'work-flexer.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'noreply-service@work-flexer.com';
                $mail->Password = 'Ludvanne12'; // Remplacez par le mot de passe de votre compte e-mail
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;

                // Contenu de l'e-mail
                $sujet = 'Nouvelle offre d\'emploi correspondant à vos critères';
                $message = "Cher candidat, une nouvelle offre d'emploi correspondant à vos critères a été publiée. Voici les détails de l'offre...";

                $mail->setFrom('noreply-service@work-flexer.com', 'nick');
                $mail->isHTML(true);
                $mail->Subject = $sujet;
                $mail->Body = $message;

                
                // Obtenez la liste des candidats (remplacez le champ 'mail' par le champ approprié dans votre base de données)
                $candidates = AllUsers($db);

                foreach ($candidates as $candidate) {
                    $destinataire = $candidate['mail'];
                    $mail->clearAddresses();
                    $mail->addAddress($destinataire);
                    $mail->send();
                }

                echo 'E-mails envoyés avec succès';
            } catch (Exception $e) {
                echo "Erreur lors de l'envoi de l'e-mail : {$mail->ErrorInfo}";
            }
        }
    }
}
?>