<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" href="style.css">
    <title>TABELA</title>
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
            <table id="tabela" border="2px">
                <tr>
                    <th>
                        <h4>RB</h4>
                    </th>
                    <th>
                        <h4>Ime</h4>
                    </th>
                    <th>
                        <h4>Prezime</h4>
                    </th>
                </tr>                
                <?php 
                    for($i = 1; $i <= 10; $i++){
                        echo "<tr><td>$i</td><td>MILAN</td><td>MILANOVIC</td></tr>";
                    }
                ?>
            </table>
        </div>
        <div id="footer">
            <h1>Todorovic Veljko</h1>
            <h1>266/2019</h1>
        </div>
    </body>
</html>