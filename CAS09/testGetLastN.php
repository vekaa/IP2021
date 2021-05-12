
<?php 
    require_once 'DAO.php';

    $dao = new DAO();

    $osobe = $dao->getLastNOsoba(10);
    var_dump($osobe);
    
    foreach ($osobe as $key => $value) {
        echo $value['prezime'];
    }
?>