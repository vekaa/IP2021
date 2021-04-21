    <?php
        $marka = isset($_POST['marka'])?$_POST['marka']:"";
        $godiste = isset($_POST['godiste'])?$_POST['godiste']:"";
        $proizvodjac = isset($_POST['proizvodjac'])?$_POST['proizvodjac']:"";
 
    ?>
    
    <?php include_once "./partials/template1.php" ?>
        Marka: <?= $marka ?><br>
        Godiste: <?= $godiste ?><br>
        Proizvodjac: <?= $proizvodjac ?>
    <?php include_once "./partials/template2.php"?>  