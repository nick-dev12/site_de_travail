<?php 
include ('../conn/conn.php');

/**
 * Summary of getTotalUsers
 * @param mixed $db
 * @return mixed
 */
function getTotalUsers($db){
$sql = "SELECT * FROM users";
$stmt = $db->prepare($sql);
$stmt->execute();
return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * Summary of getUsers
 * @param mixed $db
 * @param mixed $categorie
 * @return mixed
 */
function getUsers($db, $categorie){
    $sql = "SELECT * FROM users WHERE categorie = :categorie ";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':categorie',$categorie, PDO::PARAM_INT );
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * Summary of getUsersInformatique
 * @param mixed $db
 * @return mixed
 */
function getUsersIngenieur($db){
    $sql = "SELECT * FROM users WHERE categorie = 'Ingénierie'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getUsersDesign($db){
    $sql = "SELECT * FROM users WHERE categorie = 'design'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getUsersRédaction($db){
    $sql = "SELECT * FROM users WHERE categorie = 'Rédaction'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getUsersmarketing($db){
    $sql = "SELECT * FROM users WHERE categorie = 'marketing'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUsersbusiness($db){
    $sql = "SELECT * FROM users WHERE categorie = 'business'";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUsersJuridique($db){
    // $sql = "SELECT * FROM users WHERE categorie = 'Juridique'";
    $sql = "SELECT * FROM users WHERE categorie = 'Juridique' ";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getUsersInformatique($db){
    // $sql = "SELECT * FROM users  JOIN competence_users ON users.id = competence_users.users_id   WHERE categorie = 'Informatique'";
    $sql = "SELECT *  
    FROM users WHERE categorie = 'Informatique' ";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getInfoUsers($db,$id){
    $sql = "SELECT * FROM users WHERE id=:id";
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id',$id,PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
}


function Occuper($db,$statut,$id){
    $sql = "UPDATE users SET statut=:statut WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':statut',$statut);
    $stmt->bindValue(':id',$id);
    return $stmt->execute();
}


/**
 * Summary of recalerCandidats
 * @param mixed $db
 * @param mixed $statut
 * @param mixed $poste_id
 * @return mixed
 */
function Disponible($db,$statut,$id){
    $sql = "UPDATE users  SET statut=:statut WHERE id=:id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':statut',$statut);
    $stmt->bindValue(':id',$id);
    return $stmt->execute();
}

?>