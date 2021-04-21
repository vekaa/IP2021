<?php
    require_once 'student.php';
    $msg = isset($msg)?$msg:"";

    $ime = isset($_POST['ime'])?$_POST['ime']:"";
    $prezime = isset($_POST['prezime'])?$_POST['prezime']:"";
    $brojIndeksa = isset($_POST['brojIndeksa'])?$_POST['brojIndeksa']:"";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I KOLOKVIJUM</title>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/jquery.validate.min.js"></script>

    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="./bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <script src="./js/myScript.js"></script>
</head>
<body>
    <div class="container text-center">
        <!-- HEADER -->
        <div class="row">
            <div class="col-sm-12" style="margin-top: 50px; margin-bottom: 50px;"><a href="index.php"><h1>I KOLOKVIJUM</h1></a></div>        
        </div>
        <!-- NAVBAR -->
        <div class="row border" style="height: 100px; align-items: center;">
            <div class="col-sm-6"><a href="forma.php">FORMA</a></div>
            <div class="col-sm-6"><a href="tabela.php">TABELA</a></div>
        </div>
        <!-- CONTENT -->
        <div class="row justify-content-center" style="height: 300px; align-items: center;">
            <form action="obrada.php" method="POST">
                <input type="text" name="ime" placeholder="Ime" value="<?= $ime ?>"><br>
                <input type="text" name="prezime" placeholder="Prezime" value="<?= $prezime ?>"><br>
                <input type="text" name="brojIndeksa" placeholder="Broj indeksa" value="<?= $brojIndeksa?>"><br>
                <input type="submit" value="Unesi"><br>
                <?= $msg ?>
            </form>
        </div>
        <!-- FOOTER -->
        <div class="row">
            <div class="col-sm-12" style="margin-top: 50px; margin-bottom: 50px;">
               <h1>Veljko Todorovic<br>266/2019</h1>
            </div>        
        </div>
    </div>
</body>
</html>