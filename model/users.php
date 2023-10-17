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
    // $sql = "SELECT * FROM users WHERE categorie = 'Ingénierie'";
    $sql = "SELECT u.*, GROUP_CONCAT(cu.id) as competencees 
    FROM users u
    JOIN competence_users cu ON cu.users_id = u.id
    WHERE u.categorie = 'Ingénierie' 
    GROUP BY u.id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getUsersDesign($db){
    // $sql = "SELECT * FROM users WHERE categorie = 'design'";
    $sql = "SELECT u.*, GROUP_CONCAT(cu.id) as competencees 
    FROM users u
    JOIN competence_users cu ON cu.users_id = u.id
    WHERE u.categorie = 'design' 
    GROUP BY u.id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getUsersRédaction($db){
    // $sql = "SELECT * FROM users WHERE categorie = 'Rédaction'";
    $sql = "SELECT u.*, GROUP_CONCAT(cu.id) as competencees 
    FROM users u
    JOIN competence_users cu ON cu.users_id = u.id
    WHERE u.categorie = 'Rédaction' 
    GROUP BY u.id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getUsersmarketing($db){
    // $sql = "SELECT * FROM users WHERE categorie = 'marketing'";
    $sql = "SELECT u.*, GROUP_CONCAT(cu.id) as competencees 
    FROM users u
    JOIN competence_users cu ON cu.users_id = u.id
    WHERE u.categorie = 'marketing' 
    GROUP BY u.id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUsersbusiness($db){
    // $sql = "SELECT * FROM users WHERE categorie = 'business'";
    $sql = "SELECT u.*, GROUP_CONCAT(cu.id) as competencees 
    FROM users u
    JOIN competence_users cu ON cu.users_id = u.id
    WHERE u.categorie = 'business' 
    GROUP BY u.id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getUsersJuridique($db){
    // $sql = "SELECT * FROM users WHERE categorie = 'Juridique'";
    $sql = "SELECT u.*, GROUP_CONCAT(cu.id) as competencees 
    FROM users u
    JOIN competence_users cu ON cu.users_id = u.id
    WHERE u.categorie = 'Juridique' 
    GROUP BY u.id";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getUsersInformatique($db){
    // $sql = "SELECT * FROM users  JOIN competence_users ON users.id = competence_users.users_id   WHERE categorie = 'Informatique'";
    $sql = "SELECT u.*, GROUP_CONCAT(cu.id) as competencees 
    FROM users u
    JOIN competence_users cu ON cu.users_id = u.id
    WHERE u.categorie = 'Informatique' 
    GROUP BY u.id";
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

?>