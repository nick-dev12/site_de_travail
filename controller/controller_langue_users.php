<?php
require_once('../model/langue_users.php');


if(isset($_POST['ajoutss'])){
$langue = '';
$niveau = '';
$user_id = $_SESSION['users_id'];

if(empty($_POST['langue'])){
    $erreurs ='veuiller entrer une langue';
}else{
    $langue = $_POST['langue'];
}
if(empty($_POST['niveau'])){
    $erreurs ='veuiller entrer un niveau';
}else{
    $niveau = $_POST['niveau'];
}


if (empty($erreurs)) {
    if (postLangue ($db, $users_id, $langue, $niveau)) {
        
        header('Location: user_profil.php');
        exit;
    }
}
}


if (isset($_GET['id'])) {
    $afficheLangue = getLangue($db, $_GET['id']);
     }else{
        $afficheLangue = getLangue($db, $_SESSION['users_id']);
     }

?>