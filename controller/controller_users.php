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

// affiches les utilisateur qui sont dans la categorie Design
$UsersDesign = getUsersDesign($db);

// affiches les utilisateur qui sont dans la categorie Rédaction
$UsersRédaction = getUsersRédaction($db);

// affiches les utilisateur qui sont dans la categorie marketing
$Usersmarketing = getUsersmarketing($db); 

// affiches les utilisateur qui sont dans la categorie business
$Usersbusiness = getUsersbusiness($db);

// affiches les utilisateur qui sont dans la categorie Juridique
$UsersJuridique = getUsersJuridique($db);

// Affiche les utilisateurs qui sont dans la catégorie Informatique
$UsersInformatique = getUsersInformatique($db);


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
?>


