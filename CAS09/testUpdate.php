<?php 
    require_once 'DAO.php';

    $dao = new DAO();

    $dao->updateOsobaJMBGbyID('00000000',9);
    echo "UPDATE";
?>
