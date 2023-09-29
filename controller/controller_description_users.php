<?php

require_once('../model/description_users.php');



// Vérification si le bouton valider est cliqué
if (isset($_POST['ajouter'])) {
    // Récupération des données du formulaire
    // Déclaration des variables 
    $description = '';

    $users_id = $_SESSION['users_id'];

    // Vérification du nom
    if (empty($_POST['description'])) {
        $erreurs = "Veiller saisir votre description";
    } else {
        $description = $_POST['description']; // Échapper les caractères spéciaux
    }


    // Si aucune erreur n'est détectée, procédez à l'insertion
    if (empty($erreurs)) {
        if (insertDescription($db, $users_id, $description)) {

        }
        ;

        // Redirection vers une page de confirmation
        header('Location: user_profil.php');
        exit;
    }
}


// Vérification si le bouton valider est cliqué
if (isset($_POST['Modifier'])) {
    // Récupération des données du formulaire
    // Déclaration des variables 
    $nouvelleDescription = ''; // Correction ici

    $users_id = $_SESSION['users_id'];

    // Vérification du nom
    if (empty($_POST['nouvelleDescription'])) {
        $erreurs = "Veuillez saisir votre description"; // Correction ici
    } else {
        $nouvelleDescription = $_POST['nouvelleDescription']; // Correction ici, en enlevant l'espace après 'nouvelleDescription'
    }

    // Si aucune erreur n'est détectée, procédez à l'insertion
    if (empty($erreurs)) {
        if (modifierDescription($db, $users_id, $nouvelleDescription)) {
            # code...
        }


        // Redirection vers une page de confirmation
        header('Location: user_profil.php');
        exit;
    }
}


$descriptions = afficheDescription($db, $_SESSION['users_id'] );
?>