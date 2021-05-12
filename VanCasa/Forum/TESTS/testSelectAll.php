<?php 
    require_once '../DAO.php';
    require_once '../Topic.php';

    $dao = new DAO();
    $result = $dao->selectAll();
    var_dump($result);
?>