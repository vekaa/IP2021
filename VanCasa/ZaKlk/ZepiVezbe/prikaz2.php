    <?php
        $auto = isset($auto)?$auto:NULL;
        if($auto!=NULL){
    ?>
    
    <?php include_once "./partials/template1.php" ?>
        Prikaz uz pomoc klase<br>
        Marka: <?= $auto->marka ?><br>
        Godiste: <?= $auto->godiste ?><br>
        Proizvodjac: <?= $auto->proizvodjac ?>
    <?php include_once "./partials/template2.php"?>    

    <?php
        }else{ header('Location: index.php');}
    ?>