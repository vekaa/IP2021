
<?php 
    require_once 'DAO.php';

    $dao = new DAO();

    $osoba = $dao->getOsobaById(4);
    var_dump($osoba);
    echo $osoba['prezime'];
?>