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
        <div class="row">
            <div class="col">
                <a href="index.php"><h1>I KOLOKVIJUM</h1></a>
            </div>
        </div>

        <!-- NAVBAR -->
        <div class="row">
            <div class="col-sm-6"><a href="forma.php">FORAM</a> </div>
            <div class="col-sm-6"><a href="tabela.php">TABELA</a></div>
        </div>

        <!-- CONTENT -->
        <div class="row justify-content-center" style="height: 300px; align-items: center;">
            <form action="obrada.php">
                <input type="text" name="ime" placeholder="Ime" required><br>
                <input type="number" name="godiste" min="1980" max="2021" value="1980" placeholder="godiste"><br>
                <input type="text" name="proizvodjac" placeholder="Proizvodjac"><br>
                <input type="submit" value="Unesi">
            </form>
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