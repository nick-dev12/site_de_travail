<?php
include( __DIR__.' /../model/message1.php');

if (isset($_GET['offres_id'])) {

   if(isset($_SESSION['compte_entreprise'])){
   $afficheMessage1 = getMessage1($db,$_SESSION['compte_entreprise'],$_GET['offres_id'],$_GET['users_id']);

    if (isset($_POST['envoyer'])) {

      $entreprise_id = $_GET['entreprise_id'];
      $offre_id = $_GET['offres_id'];
      $users_id = $_GET['users_id'];
      if(isset($_GET['statut'])){
        $statut = $_GET['statut'];
      }else{
        $statut = '';
      }
      $messages = $_POST['messages'];
      $indicatif= 'recruteur';
    
      if (postMessage1($db,$entreprise_id,$users_id,$offre_id,$statut,$messages,$indicatif)) {
       // Assurez-vous de terminer le script après la redirection
      }
         header("Location: message_entreprise.php?offres_id=".$_GET['offres_id']."&entreprise_id=".$_GET['entreprise_id']."&users_id=".$_GET['users_id']."&statut=".$_GET['statut']);
        exit; 
    }
}


if(isset($_SESSION['users_id'])){
  $afficheMessage1 = getMessage1($db,$_GET['entreprise_id'],$_GET['offres_id'],$_GET['users_id']);

   if (isset($_POST['envoyer'])) {

     $entreprise_id = $_GET['entreprise_id'];
     $offre_id = $_GET['offres_id'];
     $users_id = $_GET['users_id'];
    if(isset($_GET['statut'])){
      $statut = $_GET['statut'];
    }else{
      $statut = '';
    }
     $messages = $_POST['messages'];
     $indicatif= 'candidat';
   
     if (postMessage1($db,$entreprise_id,$users_id,$offre_id,$statut,$messages,$indicatif)) {
       
     }
       header("Location: get_message_users.php?offres_id=".$_GET['offres_id']."&entreprise_id=".$_GET['entreprise_id']."&users_id=".$_GET['users_id']."&statut=".$_GET['statut']);
       exit();
   }
}
}



?>