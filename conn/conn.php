<?php

// Paramètres de connexion 
$db_host = "localhost";
$db_name = "ludvanne12_work-flexer"; 

// Identifiants fournis par CPanel
$db_user = "ludvanne12_workflexer";  
$db_pass = "Ludvanne12@gmail.com";

try {
  // Connexion à la base avec PDO
  $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

  // Gestion des erreurs
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo $e->getMessage();
}

?>