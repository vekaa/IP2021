    <?php
        $msg = isset($msg)?$msg:"";

        $marka = isset($_POST['marka'])?$_POST['marka']:"";
        $godiste = isset($_POST['godiste'])?$_POST['godiste']:"";
        $proizvodjac = isset($_POST['proizvodjac'])?$_POST['proizvodjac']:"";
    ?>
    
    <?php include_once "./partials/template1.php" ?>
        <form action="obrada.php" method="POST">
                Marka:<br>
                <input type="text" name="marka" value="<?= $marka ?>" required><br>
                Godiste:<br>
                <input type="number" name="godiste" value="<?= $godiste ?>"><br>
                Proizvodjac:<br>
                <input type="text" name="proizvodjac" value="<?= $proizvodjac ?>" required><br>
                <input type="submit" name="action" value="Submint"><br>
                <?= $msg ?>
        </form>
    <?php include_once "./partials/template2.php"?>    