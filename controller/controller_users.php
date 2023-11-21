<?php
require_once('../model/users.php');

if ($totalUsers = getTotalUsers($db)) {
    $categorieUsers = $totalUsers['categorie'];
    $afficheUsers = getUsers($db , $categorieUsers) ;

}



// if (isset($totalUsers)){
//     $categorieUsers = $totalUsers['categorie'];
// }


// affiches les utilisateur qui sont dans la categorie ingenieur 
$Usersingegneur = getUsersIngenieur($db);
shuffle($Usersingegneur);
// affiches les utilisateur qui sont dans la categorie Design
$UsersDesign = getUsersDesign($db);
shuffle($UsersDesign);
// affiches les utilisateur qui sont dans la categorie Rédaction
$UsersRédaction = getUsersRédaction($db);
shuffle($UsersRédaction);
// affiches les utilisateur qui sont dans la categorie marketing
$Usersmarketing = getUsersmarketing($db); 
shuffle($Usersmarketing);
// affiches les utilisateur qui sont dans la categorie business
$Usersbusiness = getUsersbusiness($db);
shuffle($Usersbusiness);
// affiches les utilisateur qui sont dans la categorie Juridique
$UsersJuridique = getUsersJuridique($db);
shuffle($UsersJuridique);
// Affiche les utilisateurs qui sont dans la catégorie Informatique
$UsersInformatique = getUsersInformatique($db);
shuffle($UsersInformatique);

if(isset($_GET['disponible'])){
    $statut = 'Disponible';
    $id = $_SESSION['users_id'];
    if(Disponible($db,$statut,$id)){
        header("Location: user_profil.php");
        exit();
    }
}

if(isset($_GET['occuper'])){
    $statut = 'Occuper';
    $id = $_SESSION['users_id'];
    if(Occuper($db,$statut,$id)){
        header("Location: user_profil.php");
        exit();
    }
}





if (isset($_POST['valide1'])) {
    $users_id = $_SESSION['users_id'];
    $nom = '';
    if (empty($_POST['nom'])) {
        $_SESSION['error_message'] = 'nom obligatoire';
    } else {
        $nom = $_POST['nom'];
    }
    if (empty($_SESSION['error_message'])) {
        if (update11($db, $nom, $users_id)) {

        }
        $_SESSION['success_message'] = 'Modifier avec succès';
        header('Location: modifier.php');
        exit();
    }
}



if (isset($_POST['valide3'])) {
    $users_id = $_SESSION['users_id'];
    $mail = '';
    if (empty($_POST['mail'])) {
        $_SESSION['error_message'] = 'nom obligatoire';
    } else {
        $mail = $_POST['mail'];
    }
    if (empty($_SESSION['error_message'])) {
        if (update33($db, $mail, $users_id)) {
            
        }
        $_SESSION['success_message'] = 'Modifier avec succès';
        header('Location: modifier.php');
        exit();
    }
}

if (isset($_POST['valide4'])) {
    $users_id = $_SESSION['users_id'];
    $phone = '';
    if (empty($_POST['phone'])) {
        $_SESSION['error_message'] = 'nom obligatoire';
    } else {
        $phone = $_POST['phone'];
    }
    if (empty($_SESSION['error_message'])) {
        if (update44($db, $phone, $users_id)) {
            
        }
        $_SESSION['success_message'] = 'Modifier avec succès';
        header('Location: modifier.php');
        exit();
    }
}

if (isset($_POST['valide5'])) {
    $users_id = $_SESSION['users_id'];
    $competence = '';
    if (empty($_POST['competence'])) {
        $_SESSION['error_message'] = 'nom obligatoire';
    } else {
        $competence = $_POST['competence'];
    }
    if (empty($_SESSION['error_message'])) {
        if (update55($db, $competence, $users_id)) {
            
        }
        $_SESSION['success_message'] = 'Modifier avec succès';
        header('Location: modifier.php');
        exit();
    }
}

if (isset($_POST['valide6'])) {
    $users_id = $_SESSION['users_id'];
    $ville = '';
    if (empty($_POST['ville'])) {
        $_SESSION['error_message'] = 'nom obligatoire';
    } else {
        $ville = $_POST['ville'];
    }
    if (empty($_SESSION['error_message'])) {
        if (update66($db, $ville, $users_id)) {
            
        }
        $_SESSION['success_message'] = 'Modifier avec succès';
        header('Location: modifier.php');
        exit();
    }
}

if (isset($_POST['valide7'])) {
    $users_id = $_SESSION['users_id'];
    $profession = '';
    if (empty($_POST['profession'])) {
        $_SESSION['error_message'] = 'nom obligatoire';
    } else {
        $profession = $_POST['profession'];
    }
    if (empty($_SESSION['error_message'])) {
        if (update77($db, $profession, $users_id)) {
            
        }
        $_SESSION['success_message'] = 'Modifier avec succès';
        header('Location: modifier.php');
        exit();
    }
}

if (isset($_POST['valide8'])) {
    $users_id = $_SESSION['users_id'];
    $categorie = '';
    if (empty($_POST['categorie'])) {
        $_SESSION['error_message'] = 'nom obligatoire';
    } else {
        $categorie = $_POST['categorie'];
    }
    if (empty($_SESSION['error_message'])) {
        if (update88($db, $categorie, $users_id)) {
            
        }
        $_SESSION['success_message'] = 'Modifier avec succès';
        header('Location: modifier.php');
        exit();
    }
}
?>


