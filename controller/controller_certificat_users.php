<?php
require_once('../model/certificat_users.php');


if (isset($_POST['ajouteer2'])) {

    $certificat = '';

    $users_id = $_SESSION['users_id'];

    if (empty($_POST['certificat'])){
        $erreurs = 'veuiller entrer u certificat!';
    }else{
        $certificat = $_POST['certificat'];
    }

    if (empty($erreurs)) {

        if (postCertificat($db , $users_id, $certificat)) {

             header('Location: user_profil.php');
            exit;
        }
    }
}


$afficheCertificat = getCertificat($db, $_SESSION['users_id'])

?>