<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<?php
include_once('connexion_bdd.php');

if (isset($_GET['error'])) {
    if ($_GET['error'] == 'succes') {
        $message = '<div class="alert alert-success">votre ue à bien été supprimer!</div>';
    }elseif ($_GET['error'] == 'updated'){
        $message = '<div class="alert alert-updated">votre ue à bien été modifier!</div>';
    }
}
$sql = "SELECT * FROM `ue` ";
$resultat = $conn->query($sql);

?>
<div style="width: 50%; margin-top:  100px;margin-left: 250px">
    <?php if (isset($message)): echo $message; endif;?>
    <table class="table" style="widpadding: 10px; border: 1px solid black ">
        <tr style="padding: 10px; border: 1px solid black">
            <th scope="col">Code UE</th>
            <th scope="col">Libelle EU</th>
            <th scope="col">Code formation</th>

        </tr>
        <?php

        while ($donnees = $resultat->fetch()) {
            echo "
     <tr>
        <td> " . $donnees['code_ue'] . "</td >
        <td> " . $donnees['libelle_ue'] . "</td>
        <td> " . $donnees['code_formation'] . "</td>
        
        <td><a href=\"delet_UE.php?id=" . $donnees['code_ue'] . " \"><input type=\"button\" value=\"Delete\"  onclick=\"return confirm('vous voulez supprimer cette ue?');\" /></a></td>
        <td><a href=\"apdate_UE.php?id=" . $donnees['code_ue'] . " \"><input type=\"button\" value=\"Apdate\" /></a></td>


    </tr>
    ";
        }
        ?>

    </table>
</div>
</body>
</html>


