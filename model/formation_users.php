<?php 
include('../conn/conn.php');

// model.php

// Fonction pour insérer une formation dans la base de données
/**
 * Summary of insertFormation
 * @param mixed $db
 * @param mixed $users_id
 * @param mixed $annee
 * @param mixed $annees
 * @param mixed $Filiere
 * @param mixed $etablissement
 * @param mixed $niveau
 * @return mixed
 */
function insertFormation($db, $users_id, $annee, $annees, $Filiere, $etablissement, $niveau) {
    // Préparation de la requête SQL
    $sql = "INSERT INTO formation_users (users_id, annee, annees, Filiere, etablissement, niveau ) 
            VALUES (:users_id, :annee, :annees, :Filiere, :etablissement, :niveau)";

    // Préparation de la requête 
    $stmt = $db->prepare($sql);

    // Association des paramètres
    $stmt->bindParam(':users_id', $users_id);
    $stmt->bindParam(':annee', $annee);
    $stmt->bindParam(':annees', $annees);
    $stmt->bindParam(':Filiere', $Filiere);
    $stmt->bindParam(':etablissement', $etablissement);
    $stmt->bindParam(':niveau', $niveau);

    // Exécution de la requête
    return $stmt->execute();
}

/**
 * Summary of getFormation
 * @param mixed $db
 * @param mixed $users_id
 * @return mixed
 */
function getFormation($db, $users_id) {
    $sql = "SELECT * FROM formation_users WHERE users_id = :users_id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':users_id', $users_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

/**
 * Summary of deleteFormation
 * @param mixed $db
 * @param mixed $id
 * @return mixed
 */
function deleteFormation($db, $id) {
    $sql = "DELETE FROM formation_users WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
}
?>