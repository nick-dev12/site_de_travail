<?php

include(__DIR__. '/conn/conn.php');

/**
 * Summary of getEntreprise
 * @param mixed $db
 * @param mixed $id
 * @return mixed
 */
function getEntreprise($db,$id){
$sql = " SELECT * FROM compte_entreprise WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindValue(':id', $id , PDO::PARAM_INT);
$stmt->execute();
return $stmt->fetch(PDO::FETCH_ASSOC);
}


/**
 * Summary of postOffres
 * @param mixed $db
 * @param mixed $entreprise_id
 * @param mixed $poste
 * @param mixed $mission
 * @param mixed $profil
 * @param mixed $metier
 * @param mixed $contrat
 * @param mixed $etude
 * @param mixed $region
 * @param mixed $experience
 * @param mixed $langues
 * @param mixed $categorie
 * @param mixed $date
 * @return mixed
 */
function postOffres($db,$entreprise_id, $poste,$mission,$profil,$contrat,$etudes,$experience,$localite,$langues,$categorie,$date){

    $sql = "INSERT INTO offre_emploi (entreprise_id,poste,mission,profil,contrat,etudes,experience,localite,langues,categorie,date)
    VALUES (:entreprise_id, :poste,:mission,:profil,:contrat,:etudes,:experience,:localite,:langues,:categorie,:date)";

    $stmt = $db->prepare($sql);
    // Bind de chaque paramètre
$stmt->bindParam(':entreprise_id', $entreprise_id);
$stmt->bindParam(':poste', $poste);
$stmt->bindParam(':mission', $mission);
$stmt->bindParam(':profil', $profil);
$stmt->bindParam(':contrat', $contrat);
$stmt->bindParam(':etudes', $etudes);
$stmt->bindParam(':experience', $experience);
$stmt->bindParam(':localite', $localite);
$stmt->bindParam(':langues', $langues);
$stmt->bindParam(':categorie', $categorie);
$stmt->bindParam(':date', $date);
return $stmt->execute();
}


/**
 * Summary of getOffresEmplois
 * @param mixed $db
 * @param mixed $entreprise_id
 * @return mixed
 */
function getOffresEmplois($db,$entreprise_id){
    $sql = "SELECT * FROM offre_emploi t1
    JOIN compte_entreprise t2 ON t1.entreprise_id = t2.id
     WHERE entreprise_id = :entreprise_id" ;
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':entreprise_id', $entreprise_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchALL(PDO::FETCH_ASSOC);
}

function selectOffre ($db,$entreprise_id){
    $sql = "SELECT * FROM offre_emploi WHERE entreprise_id = :entreprise_id ";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':entreprise_id', $entreprise_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function AllUsers ($db){
    $sql = "SELECT * FROM users ";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



?>