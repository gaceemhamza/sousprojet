<?php

include_once('connexion_bdd.php');
/*if (!empty($_POST['Codef']) && !empty($_POST['Libellef']) && !empty($_POST['niveauf'])) {*/
    $id = $_POST['codeFormation'];
    $LibelleF = $_POST['Libellef'];
    $niveauF = $_POST['niveauf'];

    try {
        $sql = "UPDATE  formation SET  Libelle_formation=?, niveau_de_formation=? WHERE Code_formation= ?";
        $conn->prepare($sql)->execute([$LibelleF, $niveauF, $id]);


        /*header('location: view_formation.php?error=update');*/
    } catch (PDOException $e) {
        echo $e;
    }


?>