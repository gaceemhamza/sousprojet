<?php
include_once('connexion_bdd.php');
$id = $_GET['id'];

$sql = "SELECT * FROM  formation  WHERE code_formation=? ";
$data = $conn->prepare($sql);
$data->execute([$id]);
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
        <h2 style="margin-left:30% "> Modifier une formation</h2>
        <div style="margin-left: 25% ;margin-right: 25% ">


        </div>

        <form class="form-horizontal"  method="post" action="apdate_formation2.php" >

            <div  style="margin-left: 40%; margin-right: 30%;color: #0000FF">

            </div>
            <div class="form-group">

                <label class="col-md-4 control-label"> Code formation</label>
                <div class="col-md-5">
                    <input type="text" name="codeFormation"  value= "<?php echo $row['code_formation'] ?>" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label" for="Name">Libelle formation</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="Libellef" value="<?php echo $row['libelle_formation'] ?>" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="">niveau formation</label>
                <div class="col-md-5">
                    <select  name="niveauf" " class="form-control">
                        <option selected=" "> <?php echo $row['niveau_de_formation'] ?> </option>
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                        <option value="M1">M1</option>
                        <option value="M2">M2</option>
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
<head>

