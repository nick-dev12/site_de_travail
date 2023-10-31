<?php
require_once(__DIR__.'/../model/centre_interet.php');


if (isset($_POST['ajouter_interet'])) {

$erreurs = '' ;
    $users_id = $_SESSION['users_id'];

    if (empty($_POST['interet'])) {
        $erreurs = 'Ce champ ne doit pas être vide !';
    }else{
        $interet = $_POST['interet'];
    }

    if (empty($erreurs)) {
        if (posteCentreInteret($db,$users_id,$interet)) {
            $_SESSION['sucsses_message'] = 'Ajouter avec succès';
            header('Location: user_profil.php');
            exit();
        }
    }

}


if (isset($_SESSION['users_id'])){
    $afficheCentreInteret = getAllCentreInteretUsers ($db,$_SESSION['users_id']);
} 

?>