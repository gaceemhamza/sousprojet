<?php
include_once('connexion_bdd.php');

$id=$_GET["id"];
if (!empty($id)){
    try{
        $sql = 'DELETE FROM ue WHERE code_ue= '. $id .' ';

        $conn->exec($sql);
        header('location: view_EU.php?error=succes');
    }
    catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
?>