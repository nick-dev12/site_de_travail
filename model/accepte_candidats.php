<?php
include ('../conn/conn.php');


function AccepteCandidats($db,$statut,$poste_id){
    $sql = "UPDATE postulation SET statut=:statut WHERE poste_id=:poste_id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':statut',$statut);
    $stmt->bindValue(':poste_id',$poste_id);
    return $stmt->execute();
}



function getAccepteCandidat($db,$entreprise_id){
    $sql = "SELECT * FROM accepte_candidat WHERE entreprise_id=:entreprise_id";
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':entreprise_id',$entreprise_id,PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>