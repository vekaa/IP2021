<?php
    require_once 'student.php';
    $msg = "";
    $studenti = isset($_POST['studenti'])?$_POST['studenti']:NULL;
    if($studenti == NULL){
        $studenti = [];
        $_POST['studenti'] = $studenti;
    }

    $ime = isset($_POST['ime'])?$_POST['ime']:"";
    $prezime = isset($_POST['prezime'])?$_POST['prezime']:"";
    $brojIndeksa = isset($_POST['brojIndeksa'])?$_POST['brojIndeksa']:"";

    if(!empty($ime) && !empty($prezime) && !empty($brojIndeksa)){
        $student = new Student($ime, $prezime, $brojIndeksa);
        $studenti[] = $student;
        include_once 'prikazStudenta.php';
    }else{
        $msg = "Unost je los";
        include_once 'forma.php';
    } 

?>