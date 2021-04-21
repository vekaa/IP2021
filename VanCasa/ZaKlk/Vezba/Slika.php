<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" href="style.css">
    <title>Slika</title>
    </head>
    <body>
    <div id="header">
            <a href="index.php"><h1>I KOLOKVIJUM</h1></a>
        </div>
        <div id="top">
            <div>
                <a href="Forma.php"><h2>FORAM</h2></a>                          
            </div>
            <div>
                <a href="tabela.php"><h2>TABELA</h2></a>                
            </div>
        </div>
        <div id="center">
            <?php
                $slika = htmlspecialchars($_GET["slika"]);
                echo "<img id=\"slika1\" src=\"$slika.jpg\" alt=\"$slika\">";
            ?>
        </div>
        <div id="footer">
            <h1>Todorovic Veljko</h1>
            <h1>266/2019</h1>
        </div>
    </body>
</html>