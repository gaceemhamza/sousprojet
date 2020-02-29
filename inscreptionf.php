<?php
include_once('connexion_bdd.php');


if (!empty($_POST['Code formation']) && !empty($_POST['Libelle formation']) && !empty($_POST['Niveau formation'])) {

    $Codeformation = $_POST['Code formation'];
    $Libelleformation = $_POST['Libelle formation'];
    $Niveauformation = $_POST['Niveau formation'];

    try {
        $sql = "INSERT INTO formation (Code formation, Libelle formation, Niveau formation)
        VALUES ('$Codeformation','$Libelleformation','$Niveauformation' )";
        $conn->exec($sql);
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    header('location: fiche.php?error=succes');

}
?>