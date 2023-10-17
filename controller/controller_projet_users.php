<?php
require_once('../model/projet_users.php');


if(isset($_POST['valider'])){


    $user_id = $_SESSION['users_id'];

    $titre = $liens = $projetdescription = $images ='';

    if(empty($_POST['titre'])) {
        $erreurs = 'veuiller ajouter un titre';
    }else{
        $titre = $_POST['titre'];
    }

    $liens = $_POST['liens'];

    $projetdescription = $_POST['projetdescription'];

    $images = $_FILES['images'];

    if ($images ['error']==0) {
        
        $fileName = $images['name'];
        $tmpName = $images['tmp_name'];

        $targetFile = '../upload/'. $fileName;
        move_uploaded_file($tmpName, $targetFile);
    }

    if (empty($erreurs)) {
        if (postProjetUsers($db,$users_id,$titre,$liens,$projetdescription,$fileName)) {
            $_SESSION['success_message'] = "projet ajouter avec succet";

            header("Location: user_profil.php");
            exit();
        }
    }

}



if (isset($_GET['id'])) {
    $affichePojetUsers = getProjetUsers($db, $_GET['id']);
     }else{
        $affichePojetUsers = getProjetUsers($db, $_SESSION['users_id']);
     }

?>