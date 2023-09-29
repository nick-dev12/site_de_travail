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
?>


