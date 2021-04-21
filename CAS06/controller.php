<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $ime = isset($_POST['ime']) ? $_POST['ime'] : "";
        $prezime = isset($_POST['prezime']) ? $_POST['prezime'] : "";
        $godina = isset($_POST['godine']) ? $_POST['godine'] : "";
        $sifra = isset($_POST['sifra']) ? $_POST['sifra'] : "";
        $validacija = isset($_POST['validacija']) ? $_POST['validacija'] : "";
        $zbir = isset($_POST['zbir']) ? $_POST['zbir'] : "";

        if(!empty($ime) && !empty($prezime) && !empty($godina) && !empty($sifra) && !empty($validacija) && !empty($zbir)){
            if($validacija == $zbir){
                if(is_numeric($godina) && $godina > 0 && $godina < 120){
                    if($sifra == "12345"){
                        $msg ="SVE OK";
                        // include 'prikaz.php';
                        include 'index.php';
                    }else{
                        $msg = "Pogresna sifra";
                        include 'index.php';
                    }
                }else{
                    $msg = "Godine moraju biti broj";
                    include 'index.php';
                }
            }else{
                $msg = "Zbir nije dobar, vi ste mozda robot";
                include 'index.php';
            }
        }else{
            $msg = "Morate popuniti sva polja";
            // JA SAM NA KONTROLERU A VIDIM INDEX !! ! ! !! ! ! !
            include 'index.php';
        }

    }else{
        // Ako probamo preko url(get metodom) da pristupimo controller.php
        // vraca nas na index.php
        header("Location: index.php");
    }

?>