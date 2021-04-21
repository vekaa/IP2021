<?php
    require_once 'Auto.php';
    $marka = isset($_POST['marka'])?$_POST['marka']:"";
    $godiste = isset($_POST['godiste'])?$_POST['godiste']:"";
    $proizvodjac = isset($_POST['proizvodjac'])?$_POST['proizvodjac']:"";

    if(!empty($marka) && !empty($godiste) && !empty($proizvodjac)){
        if(is_numeric($godiste)){
            $auto = new Auto($marka, $godiste, $proizvodjac);

            //include_once 'prikaz.php';
            include_once 'prikaz2.php';
        }else{
            $msg = "Godiste mora biti broj";
            include_once 'forma.php';
        }
    }else{
        $msg = "Morate unesti sva polja";
        include_once 'forma.php';
    }
?>