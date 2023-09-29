<?php

// Inclusion du fichier de configuration de la base de données
require_once(__DIR__ . '/../model/competence_users.php');


// Vérification si le bouton valider est cliqué
if (isset($_POST['Ajouter1'])) {
    // Récupération des données du formulaire
    // Déclaration des variables 
    $competence = '';
    $users_id = $_SESSION['users_id'];

    // Vérification du nom
    if (empty($_POST['competence'])) {
        $_SESSION['error_message'] =  "Veuillez saisir votre compétence";
    } else {
        $competence = $_POST['competence']; // Échapper les caractères spéciaux
    }

    // Si aucune erreur n'est détectée, procédez à l'insertion
    if (empty( $_SESSION['error_message'])) {
        if (insertCompetence($db, $users_id, $competence)) {
            // Redirection vers une page de confirmation
            $_SESSION['success_message'] = "La competence a bien été ajouté. Consultez la section competence de votre CV";
            header('Location: user_profil.php');
            exit;
        }
    }
}

// Traitement de la suppression
if (isset($_GET['supprime'])) {
    $Supprimer = $_GET['supprime'];

    if (is_numeric($Supprimer)) {
        if (deleteCompetence($db, $Supprimer)) {
            // Redirection
            header('Location: user_profil.php');
            exit();
        }
    }
}

// Récupération des compétences de l'utilisateur
$competencesUtilisateur = getCompetences($db, $_SESSION['users_id']);

 ?>