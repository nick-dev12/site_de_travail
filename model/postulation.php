<?php 
include ('../conn/conn.php');


function postCandidature($db,$entreprise_id,$poste,$offre_id,$users_id,$nom,$mail,$phone,$competences,$profession){
    $sql="INSERT INTO postulation (entreprise_id,poste,offre_id,users_id,nom,mail,phone,competences,profession) 
    VALUES (:entreprise_id,:poste,:offre_id,:users_id,:nom,:mail,:phone,:competences,:profession)";
    $stmt= $db->prepare($sql);
    $stmt->bindParam(':entreprise_id',$entreprise_id);
    $stmt->bindParam(':poste',$poste);
    $stmt->bindParam(':offre_id',$offre_id);
    $stmt->bindParam(':users_id',$users_id);
    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':mail',$mail);
    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':competences',$competences);
    $stmt->bindParam(':profession',$profession);
    return $stmt->execute();
}



function getPostulation($db,$users_id,$offre_id){
    $sql= "SELECT * FROM postulation WHERE users_id=:users_id AND offre_id=:offre_id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':users_id',$users_id,PDO::PARAM_INT);
    $stmt->bindValue(':offre_id',$offre_id,PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}



function getALLPostulation($db,$entreprise_id){
    $sql= "SELECT * FROM postulation WHERE entreprise_id=:entreprise_id" ;
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':entreprise_id',$entreprise_id,PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// function affichePostulant($db,$offre_id){
//     $sql= "SELECT * FROM postulation WHERE offre_id=:offre_id";
//     $stmt = $db->prepare($sql);
//     $stmt->bindValue(':offre_id',$offre_id,PDO::PARAM_INT);
//     $stmt->execute();
//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }
?>