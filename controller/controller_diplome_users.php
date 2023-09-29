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


$afficheDiplome = getDiplomes($db, $_SESSION['users_id'])

?>