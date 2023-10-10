<?php
require_once('..//entreprise/app/model/description_entreprise.php');

if (isset($_POST['ajouter'])) {

    $entreprise_id = $_SESSION['compte_entreprise'];

    $liens = $_POST['liens'];

    if (isset($_POST['descriptions'])) {
        $descriptions = $_POST['descriptions'];
    } else {
        $_SESSION['error_message'] = 'veuiller ajouter UNE DESCRIPTION  !!!';
    }

    if (empty($_SESSION['error_message'])) {
        if (postDescription($db, $entreprise_id, $descriptions, $liens)) {
            $_SESSION['success_message'] = ' description ajouter avec succes !!';
            header('Location: entreprise_profil.php');
        }
    }
}
?>