<?php
include(__DIR__. '/conn/conn.php');


function postDescription ($db,$entreprise_id , $descriptions, $liens){
$sql = " INSERT INTO description_entreprise (entreprise_id, descriptions, liens) VALUES ( :entreprise_id, :descriptions, :liens) ";
$stmt = $db->prepare($sql);
$stmt->bindParam(':entreprise_id', $entreprise_id);
$stmt->bindParam(':descriptions', $descriptions);
$stmt->bindParam(':liens', $liens);
return $stmt->execute();
}
 ?>