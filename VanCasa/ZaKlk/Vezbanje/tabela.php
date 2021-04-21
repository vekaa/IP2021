<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Kolokvijum</title>
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/jquery.validate.min.js"></script>

    <link rel="stylesheet" href="./bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="./bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <script src="./js/myScript.js"></script>
</head>
<body>
    <div class="container text-center">
        <!-- HEADER -->
        <div class="row" style="height: 200px; align-items: center;">
            <div class="col">
                <a href="index.php"><h1>I KOLOKVIJUM</h1></a>
            </div>
        </div>

        <!-- NAVBAR -->
        <div class="row border" style="height: 70px; align-items: center;">
            <div class="col-sm-6"><a href="forma.php">FORAM</a> </div>
            <div class="col-sm-6"><a href="tabela.php">TABELA</a></div>
        </div>

        <!-- CONTENT -->
        <div class="row">
            <table class="table">
                <tr>
                    <th>BR</th>
                    <th>IME</th>
                    <th>PREZIME</th>
                </tr>

                <?php
                    for($i = 1; $i <= 10; $i++){
                        echo "<tr>
                            <td>$i</td>
                            <td>MARKO</td>
                            <td>MArkovic</td>
                            </tr>";
                    }
                ?>

            </table>
        </div>
        <!-- FOOTER -->
        <div class="row">
            <div class="col">
                <h1>Veljko Todorovic<br>266/2019</h1>
            </div>            
        </div>
    </div>    
</body>
</html>