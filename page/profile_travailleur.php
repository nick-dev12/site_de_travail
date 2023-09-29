<?php
// Vérifie si un id est présent dans l'URL
if (isset($_GET['id'])) {
    // id présent
    // récupère l'id 
    $userId = $_GET['id'];
    
    // fait la requête SQL pour récupérer les infos utilisateur
    // ...
  } else {
    header("Location: voir_profil.php"); 
    exit();
  }

?>