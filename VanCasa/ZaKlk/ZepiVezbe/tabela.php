    <?php include_once "./partials/template1.php" ?>
        <table class="table">
                <tr>
                        <th>RB</th>
                        <th>IME</th>
                        <th>Prezime</th>
                </tr>
                <?php for($i=0; $i < 10; $i++) {?>
                <tr>
                        <td><?=  $i+1 ?></td>
                        <td>MARKO</td>
                        <td>MARKOVIC</td>
                </tr>
                <?php } ?>
        </table>
    <?php include_once "./partials/template2.php"?>    