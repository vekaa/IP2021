<?php 
    require_once 'DAO.php';

    $dao = new DAO();

    $osobe = $dao->selectAllOsobe();
    echo "Select";
    var_dump($osobe);
    foreach ($osobe as $key => $value) {
        echo $value['prezime'];
    }
?>
