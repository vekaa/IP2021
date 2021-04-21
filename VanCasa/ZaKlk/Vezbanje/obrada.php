<?php
    $ime = isset($_GET['ime'])?$_GET['ime']:"";
    $godiste = isset($_GET['godiste'])?$_GET['godiste']:"";
    $proizvodjac = isset($_GET['proizvodjac'])?$_GET['proizvodjac']:"";
    
    require_once 'student.php';
    $student = new Student('1 marko', 'Markovic', '123/123');
    $studenti = [];
    array_push($studenti,$student);
    $student = new Student('2 marko', 'Markovic', '123/123');
    array_push($studenti,$student);
    $student = new Student('3 marko', 'Markovic', '123/123');
    array_push($studenti,$student);
    $student = new Student('4 marko', 'Markovic', '123/123');
    array_push($studenti,$student);
    $student = new Student('5 marko', 'Markovic', '123/123');
    array_push($studenti,$student);
    $student = new Student('6 marko', 'Markovic', '123/123');
    array_push($studenti,$student);
    $student = new Student('7 marko', 'Markovic', '123/123');
    array_push($studenti,$student);
    $student = new Student('8 marko', 'Markovic', '123/123');
    array_push($studenti,$student);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrada</title>
    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="./bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

</head>
<body>
    <h1>
        Ime: <?= $ime?> <br>
        Iprezimeme: <?= $godiste?> <br>
        proizvodjac: <?= $proizvodjac?>
    </h1>
    <div class="container">
        <table class="table">
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Broj indeksa</th>
            </tr>
            <?php
                foreach ($studenti as $key => $value) {            
            ?>            
                <tr>
                    <td><?= $value->ime?></td>
                    <td><?= $value->prezime?></td>
                    <td><?= $value->brIndeksa?></td>
                </tr>
            <?php
                } 
            ?>
        </table>
    </div>
    
        
</body>
</html>