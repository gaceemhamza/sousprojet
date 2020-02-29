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
        $message = '<div class="alert alert-success">formation a ete bien supprimer!</div>';
    }elseif ($_GET['error'] == 'updated'){
        $message = '<div class="alert alert-update">votre formation à bien été modifier!</div>';
    }
}
$sql = "SELECT * FROM `formation` ";
$resultat = $conn->query($sql);
?>
<div style="width: 50%; margin-top:  100px;margin-left: 250px">
    <?php if (isset($message)): echo $message; endif; ?>
    <table class="table" style="widpadding: 10px; border: 1px solid black ">
        <tr style="padding: 10px; border: 1px solid black">
            <th scope="col">code formation</th>
            <th scope="col">Libillé</th>
            <th scope="col">Niveau de formation</th>

            <th scope="col"></th>
            <th scope="col"></th>


        </tr>
        <?php
        while ($donnees = $resultat->fetch()) {
            echo "
   
     <tr>
        <td> " . $donnees['code_formation'] . "</td >
        <td> " . $donnees['libelle_formation'] . "</td>
        <td> " . $donnees['niveau_de_formation'] . "</td>
        
       <td><a href=\"delet_formation.php?id=" . $donnees['code_formation'] . " \"><input type=\"button\" value=\"Delete\"  onclick=\"return confirm('vous voulez supprimer cette formation?');\" /></a></td>
        <td><a href=\"update_formation.php?id=" . $donnees['code_formation'] . " \"><input type=\"button\" value=\"update\"  onclick=\"return confirm('vous voulez modifier cette formation?');\"/></a></td>


    </tr>
    ";
        }
        ?>

    </table>
</div>
</body>
</html>
