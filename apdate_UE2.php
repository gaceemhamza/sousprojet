<?php
include_once('connexion_bdd.php');

    $id = $_POST['Code_UE'];
    $libelleEU = $_POST['libelle_ue'];
    $codef = $_POST['code_formation'];
    
if (!empty($id)){
    try{
        $sql = "UPDATE  ue  SET libelle_ue= ?,code_formation=? WHERE code_ue= ? ";

        $conn->prepare($sql)->execute([$libelleEU,$codef,$id]);
        header('location: view_UE.php?error=updated');
    }
    catch(PDOException $e) {
echo $e;
    }
}
?>