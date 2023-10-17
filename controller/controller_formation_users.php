<?php
// Inclusion du fichier de configuration de la base de données
require_once('../model/formation_users.php');


// Vérification si le bouton valider est cliqué
if (isset($_POST['ajouter2'])) {
    $erreurs = '';
    $users_id = $_SESSION['users_id'];

    // Vérification de l'annee
    if (empty($_POST['annee'])) {
        $erreurs = "Veiller entrer une date";
    } else {
        // Récupérer la date complète 
        $annee = $_POST['annee'];
    }
    // Vérification de l'annee
    if (empty($_POST['annees'])) {
        $erreurs = "Veiller entrer une date";
    } else {
        $annees = $_POST['annees']; // Échapper les caractères spéciaux
        
    }
    // Vérification de la filiere
    if (empty($_POST['Filiere'])) {
        $erreurs = "Veiller ajouter une filiere";
    } else {
        $Filiere = $_POST['Filiere']; // Échapper les caractères spéciaux
    }
    // Vérification de l'etablissement
    if (empty($_POST['etablissement'])) {
        $erreurs = "Veiller entrer un etablissement";
    } else {
        $etablissement = $_POST['etablissement']; // Échapper les caractères spéciaux
    }
    // Vérification du niveau
    if (empty($_POST['niveau'])) {
        $erreurs = "Veiller entrer un niveau";
    } else {
        $niveau = $_POST['niveau']; // Échapper les caractères spéciaux
    }

    // Si aucune erreur n'est détectée, procédez à l'insertion
    if (empty($erreurs)) {
        if (insertFormation($db, $users_id, $annee, $annees, $Filiere, $etablissement, $niveau)) {
            // Redirection vers une page de confirmation
            header('Location: user_profil.php');
            exit;
        }
    }
}

if (isset($_GET['id'])) {
   $formationUsers = getFormation($db, $_GET['id']);
    }else{
        $formationUsers = getFormation($db, $_SESSION['users_id']);
    }



// Traitement de la suppression
if (isset($_GET['supprimes'])) {
    $Supprimers = $_GET['supprimes'];

    if (is_numeric($Supprimers)) {
        if (deleteFormation($db, $Supprimers)) {
            // Redirection
            header('Location: user_profil.php');
            exit();
        }
    }
}


?>