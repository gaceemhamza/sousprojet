<?php
include_once('connexion_bdd.php');

$id=$_GET["id"];
if (!empty($id)){
    try{
        $sql = 'DELETE FROM formation WHERE code_formation= '. $id .' ';

        $conn->exec($sql);
        header('location: view_formation.php?error=succes');
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    header('location: view_formation.php?error=succes');
}
