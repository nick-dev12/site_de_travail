<?php 

require_once(__DIR__. '/../model/postulation.php');


if(isset($_POST['postuler'])){
    $entreprise_id=$offre_id=$users_id=$nom=$mail=$phone=$competances=$profession='';

    $offre_id = $_GET['id'] ;

    $Offres =getOffres($db, $offre_id );

    $poste = $Offres['poste'];

    $entreprise_id=$Offres['entreprise_id'];

    $users_id = $_POST['id_users'];

    $nom = $_POST['nom_users'];

    $mail = $_POST['mail_users'];

    $phone = $_POST['phone_users'];

    $competences= $_POST['competence_users'];

    $profession = $_POST['profession_users'];

    $images = $_POST['images_users'];

    if (postCandidature($db,$entreprise_id,$poste,$offre_id,$users_id,$nom,$mail,$phone,$competences,$profession, $images)) {
        $_SESSION['success_message']='Postulation reussi !!';
        header('Location: ../page/user_profil.php');
        exit();
    }
    
}
if (isset($_SESSION['compte_entreprise'])) {
    $getALLpostulation= getALLPostulation($db,$_SESSION['compte_entreprise']);
    
    // $offre_id = $getALLpostulation['offre_id'];

    // $affichePostulant=affichePostulant($db,$offre_id);
}

if (isset($_GET['id'])) {
    if (isset($_SESSION['users_id'])) {
        $getPostulation=getPostulation($db,$_SESSION['users_id'],$_GET['id']);
    }
}


if (isset($_SESSION['users_id'])) {
    
    $getPostulationUsers=getPostulationUsers($db,$_SESSION['users_id']);
}
?>