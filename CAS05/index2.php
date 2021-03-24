<?php
    $a = array();
    $a[0] = 3;
    $a[1] = 4;
    $a[2] = 'test';
    $a[] = 6;

    $a[10] = 10;
    $a[] = 11;
    $a[] = array(1, 2, 3, 4, 5);

    var_dump($a);

    echo "<br>";
    print_r($a);
    echo "<br>".count($a);
    echo "<br>".json_encode($a);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

</body>
</html>