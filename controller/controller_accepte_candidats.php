<?php 
require_once(__DIR__. '/../model/accepte_candidats.php');


if (isset($_GET['accepter'])) {
$poste_id = $_GET['accepter'];
$statut='accepter';

    if (AccepteCandidats($db,$statut,$poste_id)) {
        $_SESSION['success_message']='Postulation reussi !!';
       header('Location: ../page/candidature.php');
       exit();
    }

}

if (isset($_GET['recaler'])) {
    $poste_id = $_GET['recaler'];
    $statut='recaler';
    
        if (recalerCandidats($db,$statut,$poste_id)) {
            $_SESSION['success_message']='Postulation reussi !!';
           header('Location: ../page/candidature.php');
           exit();
        }
    
    }

// $getAccepteCandidat= getAccepteCandidat($db,$_SESSION['compte_entreprise'])
?>