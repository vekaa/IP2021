<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add a topic</title>
</head>
<body>
    <h1>Add a Topic</h1>
    <form action="controller.php" method="POST">
        <p><label for="owner">Your Email Address: </label><br>
        <input type="email" name="owner" id="owner" size="40" maxlength="150" required></p>

        <p><label for="title">Topic Title: </label><br>
        <input type="text" name="title" id="title" size="40" maxlength="150" required></p>
        
        <button type="submit" name="action" value="addTopic">Add topic</button>
    </form>
</body>
</html>