<?php 
include ('../conn/conn.php');


function postCandidature($db,$entreprise_id,$offre_id,$users_id,$nom,$mail,$phone,$competences,$profession){
    $sql="INSERT INTO postulation (entreprise_id,offre_id,users_id,nom,mail,phone,competences,profession) VALUES (:entreprise_id,:offre_id,:users_id,:nom,:mail,:phone,:competences,:profession)";
    $stmt= $db->prepare($sql);
    $stmt->bindParam(':entreprise_id',$entreprise_id);
    $stmt->bindParam(':offre_id',$offre_id);
    $stmt->bindParam(':users_id',$users_id);
    $stmt->bindParam(':nom',$nom);
    $stmt->bindParam(':mail',$mail);
    $stmt->bindParam(':phone',$phone);
    $stmt->bindParam(':competences',$competences);
    $stmt->bindParam(':profession',$profession);
    return $stmt->execute();
}

// function getALLPostulation($db,$users_id){
//     $sql= "SELECT * FROM postulation";
//     $stmt = $db->query($sql);
//     $stmt->execute();
//     return $stmt->fetch(PDO::FETCH_ASSOC);
// }

function getPostulation($db,$users_id,$offre_id){
    $sql= "SELECT * FROM postulation WHERE users_id=:users_id AND offre_id=:offre_id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':users_id',$users_id,PDO::PARAM_INT);
    $stmt->bindValue(':offre_id',$offre_id,PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

?>