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

if (isset($_GET['id'])) {
    $afficheCertificat = getCertificat($db,$_GET['id'] );
}else{
    $afficheCertificat = getCertificat($db, $_SESSION['users_id']);
}


if (isset($_GET['certificats'])) {

    $id = $_GET['certificats'];

    if ( deleteCertificats ( $db, $id)) {
        $_SESSION['success_message'] = 'Opération réussie ';
        header('Location: user_profil.php');
        exit;
    }
}

?>