<?php 
    require_once 'DAO.php';

    $dao = new DAO();

    $dao->deleteOsoba(8);
    echo "Delete osoba";

?>