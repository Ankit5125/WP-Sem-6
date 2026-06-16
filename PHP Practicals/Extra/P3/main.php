<html>

<head>
    <title>caclulator</title>
</head>

<body>
    <?php
    echo "<h3>Calculator</h3>";
    $a = 3;
    $b = 5;
    $c = "%";
    switch ($c) {
        case "+":
            $result = $a + $b;
            echo "Addition of this 2 numbers is = " + $result;
            break;

        case "-":
            $result = $a - $b;
            echo "Subtraction of this 2 numbers is = " + $result;
            break;

        case "*":
            $result = $a * $b;
            echo "Multiplication of this 2 numbers is = " + $result;
            break;

        case "%":
            $result = $a % $b;
            echo "Modulo of this 2 numbers is = " + $result;
            break;

        case "/":
            if ($num2 != 0) {
                $result = $a / $b;
                echo "Division of this 2 numbers is = " + $result;
            } else {
                echo "Division by zero not allowed";
            }
            break;
        default:
            echo "Invalid Operation";
    }
    ?>
</body>

</html>