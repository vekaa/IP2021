
<?php 
    require_once '../DAO.php';
    require_once '../Topic.php';

    $dao = new DAO();

    $topic = new Topic("Tema 2", date("Y-m-d") ,"milencekitic@gmail.com");
    $dao->insertTopic($topic);

?>