<?php

require_once(__DIR__ . '/../model/offre_emploi.php');
include('../model/users.php');
require('../model/vue_offre.php');

if (isset($_get['id'])) {
    $offre_id = $_GET['id'];

    if (isset($_POST['modifier'])) {

        if (isset($_POST['poste'])) {
            $poste = $_POST['poste'];
        } else {
            $_SESSION['error'] = "une erreur c'est produite";
        }
        if (isset($_POST['mission'])) {
            $mission = $_POST['mission'];
        } else {
            $_SESSION['error'] = "une erreur c'est produite";
        }

        if (isset($_POST['profil'])) {
            $profil = $_POST['profil'];
        } else {
            $_SESSION['error'] = "une erreur c'est produite";
        }

        if (isset($_POST['metier'])) {
            $metier = $_POST['metier'];
        } else {
            $_SESSION['error'] = "une erreur c'est produite";
        }
        if (isset($_POST['contrat'])) {
            $contrat = $_POST['contrat'];
        } else {
            $_SESSION['error'] = "une erreur c'est produite";
        }
        if (isset($_POST['etude'])) {
            $etudes = $_POST['etude'];
        } else {
            $_SESSION['error'] = "une erreur c'est produite";
        }

        if (isset($_POST['experience'])) {
            $experience = $_POST['experience'];
        } else {
            $_SESSION['error'] = "une erreur c'est produite";
        }

        if (isset($_POST['localite'])) {
            $localite = $_POST['localite'];
        } else {
            $_SESSION['error'] = "une erreur c'est produite";
        }

        if (isset($_POST['langues'])) {
            $langues = $_POST['langues'];
        } else {
            $_SESSION['error'] = "une erreur c'est produite";
        }
        $offre_id = $_GET['id'];

        if (empty($_SESSION['error'])) {
            if (updatOffre($db, $poste, $mission, $profil, $metier, $contrat, $etudes, $experience, $localite, $langues, $offre_id)) {
                $_SESSION['success'] = 'modification reussi !!!';
                header('Location: updat_offre.php');
                exit();
            }
        }
    }
}






$offreInformatique = getOffreInformatique($db);
$offreMarcketing = getOffremarketing($db);
$offreJuridique = getOffreJuridique($db);
$offreBusiness = getOffrebusiness($db);
$offreRedaction = getOffreRédaction($db);
$offreDesing = getOffreDesign($db);
$offreIngenierie = getOffreIngenieur($db);

if (isset($_GET['id'])) {

    $afficheOffres = getOffresEmploit($db, $_GET['id']);
  

    if (isset($_SESSION['users_id'])) {

        $getVueOffre= getVueOffre($db,$_SESSION['users_id'],$_GET['id']);

        if($getVueOffre){
  
        }else{
           $users_id = $_SESSION['users_id'];

        $getInfo = getInfoUsers($db, $_SESSION['users_id']);

        $entreprise_id = $_GET['entreprise_id'];
        $nom = $getInfo['nom'];
        $mail = $getInfo['mail'];
        $offre_id = $_GET['id'];

        if (postVue ($db,$offre_id,$users_id, $entreprise_id,$nom,$mail)) {
           
        }
        }
       

    }


}

if (isset($_SESSION['compte_entreprise'])) {
   if(isset($_GET['offre_id'])){

    $offre_id= $_GET['offre_id'];
    if(deleteOffresEmploit($db,$offre_id)){
        $_SESSION['delete_message']='offre suprimer avec succet';
        header('Location: ../entreprise/entreprise_profil.php');
        exit();
    }

}
}



?>