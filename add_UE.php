<?php
include_once('connexion_bdd.php');

$sql = "SELECT  code_formation FROM  formation  ";
$data = $conn->prepare($sql);
$data->execute([$sql]);
$row = $data->fetch();
?>

<!DOCTYPE html>
<html>
<head>

    <title></title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div  style="margin-left: 30%; margin-right: 30%;margin-top: 10% ">

    <div class="row" style="border: 1px solid;background: #E0E0E0">
        <h2 style="margin-left:30% "> Ajouter une salle</h2>


        <form class="form-horizontal" method="post" action="Ajouter_UE.php" >
           <?php /*if(isset($message)):echo $message; endif;*/ ?>
            <div  style="margin-left: 40%; margin-right: 30%;color: #0000FF">

            </div>
            <div class="form-group">

                <label class="col-md-4 control-label"> Code UE</label>
                <div class="col-md-5">
                    <input type="text" name="code_ue" class="form-control"  type="text"  >
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Name">Libelle UE</label>
                <div class="col-md-5">
                    <input type="text" name="Libelle_ue" class="form-control"  >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="">code formation</label>
                <div class="col-md-5">

                    <select  name="codef" type="text" class="form-control">

                         <?php
                         echo '<option >' ;
                        while ($row = $data->fetch()){
                            echo '</option >' ;
                            echo '<option >' .$row["code_formation"] .'</option >' ;

                         }

                        ?>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="submit"></label>
                <div class="col-md-4">
                    <button id="submit" name="submit" class="btn btn-success">Enregistre</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>-->

