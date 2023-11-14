<?php 
require_once('../model/diplome_users.php');

if (isset($_POST['ajouteer1'])) {

    $diplome='';

    $user_id = $_SESSION['user_id'];

    if (empty($_POST['diplome'])) {
        $erreurs = 'veuillez ajouter un diplome';
    }else{
        $diplome = $_POST['diplome'];
    }


    if (empty($erreurs)) {
        
        if (postDiplome($db,$users_id,$diplome)) {

            header('Location: user_profil.php');
            exit;
        }


    }
}



if (isset($_GET['id'])) {
    $afficheDiplome = getDiplomes($db,$_GET['id'] );
    }else{
        $afficheDiplome = getDiplomes($db, $_SESSION['users_id']);
    }


    if (isset($_GET['diplomes'])) {

        $id = $_GET['diplomes'];
    
        if ( deleteDiplome ( $db, $id)) {
            $_SESSION['success_message'] = 'Opération réussie ';
            header('Location: user_profil.php');
            exit;
        }
    }

?>