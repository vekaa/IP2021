<?php
    $topics = isset($topics) ? $topics : NULL;
    if($topics !=NULL){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topics</title>
</head>
<body>
    <h1>Teme na forumu</h1>
    <table border="1px" width="80%">
        <tr>
            <th>TOPIC TITLE</th>
            <th>NUMBER OF POST</th>
        </tr>
        <?php foreach ($topics as $topic) { ?>
            <tr>
                <td>
                    <b><a href="controller.php?action=Tema&id=<?= $topic->id?>"><?= $topic->title?></a></b>
                    <p>Created: <?= $topic->createTime ?> by <?= $topic->owner ?></p>
                </td>
                <td>
                </td>
            </tr>
        <?php } ?>
    </table>
    <form action="controller.php" method="get">
        <button type="submit" name="action" value="addTopic">Add topic</button>
    </form>
</body>
</html>

<?php
    }else{
        header("Location: index.php");
        die();
    }
?>