<?php
// require_once('..//entreprise/app/model/entreprise.php');
require_once(__DIR__ . '/../model/entreprise.php');

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

    $categorie = $_POST['categorie'] ;
    if (empty($categorie)) {
        $_SESSION['error_message'] = 'veuiller sélectionner une catégorie !!!';
    }
    $date = date("j , F, Y, g:i a");

    if (empty($_SESSION['error_message'])) {
        if (postOffres($db, $entreprise_id, $poste, $mission, $profil, $contrat, $etudes, $experience, $localite, $langues, $categorie, $date)) {

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
                $message = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
                <style>
                *{
                  padding: 0;
                  margin: 0%;
                }
              
                .container{
                  width: 100%;
                  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                  flex-direction: column;
                }
                .container .box1{
                    width: 60%;
                    margin: 20px auto;
                    position: relative;
                    height: 240px;
                    background-image: url(/image/WF__2_.png);
                    background-color: blue;
                    background-position: center;
                    background-size: cover;
                    border-radius: 7px;
                
                  }
                .container .box2 h1{
                  margin: 0 auto;
                  width: 90%;
                  background-color: black;
                  color: #ffffff;
                  text-align: center;
                }
                .container .box2{
                  margin: 0 auto;
                  padding:20px 40px;
                }
                .container .box2 h2{
                text-align: start;
                padding:20px 40px;
                  color: blue;
                  text-transform: uppercase;
                  width: 50%;
                  margin: 0 auto;
                }
                .container .box2 P{
                text-align: start;
                  padding: 20px;
                  width: 70%;
                  margin: 0 auto;
                }
               </style>
                </head>
                <body>
                
                <div class='container'>
                  <div class='box1'>
                    <img src='/image/WF__2_.png' alt=''>
                  </div>
                
                  <div class='box2'>
                    <h1>helo nick </h1>
                    <h2>nouvel offre d’emplois</h2>
                    <p>un nouvel offre d’emplois est disponible pour toi connecte toi vite discute avec les recuteur postule a l'offre et tante ta chance de pouvoir obtenir le job.</p>
                  </div>
                </div>
                
                </body>
                </html>";

                $mail->setFrom('noreply-service@work-flexer.com', 'work-flexer');
                $mail->isHTML(true);
                $mail->Subject = $sujet;
                $mail->Body = $message;


                // Obtenez la liste des candidats (remplacez le champ 'mail' par le champ approprié dans votre base de données)
                $candidates = AllUsers($db);

                foreach ($candidates as $candidate) {
                    if ($candidate['categorie'] == $categorie) {
                         $destinataire = $candidate['mail'];
                    }
                   
                    $mail->clearAddresses();
                    $mail->addAddress($destinataire);
                    $mail->send();
                }

                $_SESSION['success_message'] = 'Offre d\'emploi publiée avec succès';
                header('Location: entreprise_profil.php');
                exit();
                
            } catch (Exception $e) {
                header('Location: updat_offre.php');
                exit();
            }
        }
    }
}


if(isset($_SESSION['users_id'])){

}
?>