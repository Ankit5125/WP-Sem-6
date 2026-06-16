<html>

<head>
    <title>Fibonacci Numbers</title>
</head>

<body>
    <?php
    echo "<h3>Fibonacci Series</h3>";
    $a = 0;
    $b = 1;
    $num = 5;
    for ($i = 1; $i <= $num; $i++) {
        echo $a . " ";
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }
    ?>
</body>

</html>