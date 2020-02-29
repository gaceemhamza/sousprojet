<?php

include_once('connexion_bdd.php');
if (!empty($_POST['Codef']) && !empty($_POST['Libellef']) && !empty($_POST['niveauf'])) {
    $Codef = $_POST['Codef'];
    $Libellef = $_POST['Libellef'];
    $niveauf = $_POST['niveauf'];

    try {
        $sql = "INSERT INTO formation (Code_formation, Libelle_formation, niveau_de_formation)
        VALUES ('$Codef','$Libellef' ,'$niveauf')";
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

header('location: add_formation.php?error=succes');

}