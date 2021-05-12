<?php
    require_once 'Topic.php';
    require_once 'Post.php';
    require_once 'DAO.php';

    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($action == 'addTopic'){
            $email = isset($_POST['owner']) ? $_POST['owner'] : "";
            $title = isset($_POST['title']) ? $_POST['title'] : "";
            $text = isset($_POST['text']) ? $_POST['text'] : "";

            $topic = new Topic($title,date("Y-m-d H:i:s"),$email,$text);
            $dao = new DAO();
            $dao->insertTopic($topic);

            $topics = $dao->selectAll();
            include 'viewTopics.php';
        }else{
            echo "Nije add topic";
        }
    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET'){
        if($action == 'Tema'){
            $id = isset($_GET['id']) ? $_GET['id'] : "";
    
            $dao = new DAO();
            $posts = $dao->getTopicByID($id);
            $topic = $dao->getTopic($id);
            include 'viewTopic.php'; 
        } elseif ($action == 'all'){
            $dao = new DAO();
            $topics = $dao->selectAll();
            include 'viewTopics.php';
        } elseif ($action == 'addTopic'){
            // echo var_dump($action);
            include 'addtopic.php';
        } elseif ($action == 'addPost'){
            // echo var_dump($action);
            $id = isset($_GET['id']) ? $_GET['id'] : ""; 
            $owner = isset($_GET['owner']) ? $_GET['owner'] : ""; 
            $text = isset($_GET['text']) ? $_GET['text'] : ""; 
            
            $post = new Post($id,$text,NULL,$owner);
            
            $dao = new DAO();
            $dao->insertPost($post);

            $posts = $dao->getTopicByID($id);
            $topic = $dao->getTopic($id);
            include 'viewTopic.php'; 

        }       
    } else {
        // header("Location: index.php");
        // die();
    }
?>