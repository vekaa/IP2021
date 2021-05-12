<?php
    $posts = isset($posts) ? $posts : NULL;    
    $topic = isset($topic) ? $topic : NULL;    
    
    if($posts != NULL){
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
    <h1>Tema: <?= $topic['title']?></h1>
    <table border="1px" width="80%">
        <tr>
            <th>TOPIC TITLE</th>
            <th>Author</th>
        </tr>
        <?php foreach ($posts as $post) { ?>
            <tr>
                <td>
                    <p><?= $post->text?></p>
                </td>
                <td>
                <?= $post->owner?>
                </td>
            </tr>            
        <?php } ?>
    </table>

    <h4>Add a new post</h4>
    <form action="controller.php" method="GET">
        <p><label for="owner">Your Email Address: </label><br>
        <input type="email" name="owner" id="owner" size="40" maxlength="150" required></p>

        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        
        <button type="submit" name="action" value="addPost">Add post</button>
        <input type="hidden" name="id" value="<?= $topic['id']?>">
            
    </form>
</body>
</html>

<?php
    }else{
        // header("Location: index.php");
        // die();
        echo "<h1>Tema je prazna</h1>";
    
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
    <h1>Tema: <?= $topic['title']?></h1>

    <h4>Add a new post</h4>
    <form action="controller.php" method="GET">
        <p><label for="owner">Your Email Address: </label><br>
        <input type="email" name="owner" id="owner" size="40" maxlength="150" required></p>

        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        
        <button type="submit" name="action" value="addPost">Add post</button>
        <input type="hidden" name="id" value="<?= $topic['id']?>">
            
    </form>
</body>
</html>

<?php } ?>