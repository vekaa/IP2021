<?php
    //$msg = isset($_POST['msg']) ? $_POST['msg'] : '';
    // NA VRHU IMATE VIEW PROMENLJIVE KOJE PITATE AKO IMA IMA 
    $msg = isset($msg) ? $msg : ''; //PROMENLJIVA

    $ime = isset($ime) ? $ime : '';
    $prezime = isset($prezime) ? $prezime : '';
    $godina = isset($godina) ? $godina : '';
?>
<!DOCTYPE html>
<html>
<head>
<!-- <meta charset=ISO-8859-1"> -->
<title>Insert title here</title>
</head>
<body>
<form action="controller.php" method="post">
<h2>VALIDACIONA FORMA</h2>
    <input type="text" name="ime" placeholder="ime" value="<?= $ime?>" required="required"/><br>
    <input type="text" name="prezime" placeholder="prezime" value="<?= $prezime?>" required="required"/><br>
    <input type="number" min="1" max="119" name="godine" placeholder="godine" value="<?= $godina?>" required="required"/><br>
    <input type="password" name="sifra" placeholder="sifra" required="required"/><br>
    <input type="text" name="validacija" placeholder="unesite zbir" required="required"/>
    <?php 
        $prvi = rand(1, 10);
        $drugi = rand(1, 10);
        $zbir = $prvi + $drugi;
        echo " = $prvi + $drugi";
    ?><br>    
    <input type="hidden" name="zbir" value="<?= $zbir?>">
    <!-- sakriveno slanje generisanih brojva -->
    <input type="submit" value="Potvrdi"/>
</form>
<?= $msg ?>
</body>
</html>