<?php

include_once('connexion_bdd.php');

    $code_EU = $_POST['code_ue'];
    $libelleEU = $_POST['Libelle_ue'];
    $code = $_POST['codef'];

    try {
        $sql = "INSERT INTO ue (code_ue, libelle_ue, code_formation)
        VALUES ('$code_EU','$libelleEU','$code' )";
        $conn->exec($sql);

    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    
  
?>

