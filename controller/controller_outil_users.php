<?php
require_once('../model/outil_users.php');


if (isset($_POST['ajouts'])){

$outil = '';
$niveau = '';

$users_id = $_SESSION['users_id'];

if(empty($_POST['outil'])){ 
$erreurs = 'veuiller entrer un outil informatique.';
}else{
    $outil = $_POST['outil'];
}

if(empty($_POST['niveau'])){  
$erreurs = 'veuiller entrer un niveau.';
}else{
    $niveau = $_POST['niveau'];
}

if (empty($erreurs)) {
    if(postOutil($db,$users_id,$outil,$niveau )){

        header('Location: user_profil.php');
        exit;
    }
}
}



if (isset($_GET['id'])) {
    $afficheOutil = getOutil($db,$_GET['id']);
     }else{
        $afficheOutil = getOutil($db,$_SESSION['users_id']);
     }


     if (isset($_GET['suprimerOutils'])) {

        $id = $_GET['suprimerOutils'];
    
        if (deleteOutils($db, $id)) {
            $_SESSION['success_message'] = 'Opération réussie ';
            header('Location: user_profil.php');
            exit;
        }
    }
?>