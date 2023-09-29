<?php 

require_once('../model/metier_users.php');

// Vérification si le bouton valider est cliqué
if (isset($_POST['Ajouter'])) {
    // Récupération des données du formulaire
    $users_id = $_SESSION['users_id'];

    // Déclaration des variables 
    $metier=$date1=$date2=$Metierdescription= '';

    $Metierdescription= $_POST['Metierdescription'];


    // Vérification du nom
    if (empty($_POST['metier'])) {
        $erreurs = "Veiller saisir votre metier";
    } else {
        $metier = $_POST['metier']; // Échapper les caractères spéciaux
    }

    if (empty($_POST['date1'])) {
        $erreurs = 'veuiller ajouter la date du debut';
    }else{
        $date1 = $_POST['date1'] ;
    }
    if (empty($_POST['date2'])) {
        $erreurs = 'veuiller ajouter une date de fin';
    }else{
        $date2 = $_POST['date2'] ;
    }


    // Si aucune erreur n'est détectée, procédez à l'insertion
    if (empty($erreurs)) {

       if (insertMetier($db,$users_id,$metier,$date1,$date2,$Metierdescription)) {
        $_SESSION['success_message'] = "Le métier a bien été ajouté. Consultez la section métier de votre CV";
       }
        // Redirection vers une page de confirmation
        header('Location: user_profil.php');
        exit;
    }
}

$afficheMetier = getMetier( $db, $users_id);
// Récupération des compétences de l'utilisateur


// Traitement de la suppression
if (isset($_GET['supprimer'])) {

    $id = $_GET['supprimer'];

    if (is_numeric($id)) {

        // Requête DELETE
       if (suprimeMetier($db, $id)) {
        $_SESSION['success_message'] = "Le métier a bien été supprimé.";
       }
        // Redirection
        header("Location: user_profil.php?msg_key=success_message");
        exit();
    }
}
?>