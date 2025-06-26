<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator in PHP</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        $factorial = 1;

        if ($num < 0) {
            echo "Factorial is not defined for negative numbers.";
        } else {
            for ($i = 1; $i <= $num; $i++) {
                $factorial *= $i;
            }
            echo "<h3>Factorial of $num is: $factorial</h3>";
        }
    }
    ?>
</body>
</html>
