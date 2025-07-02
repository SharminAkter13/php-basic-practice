<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
    <h2>Leap Year Checker in PHP</h2>

    <form method="post" action="">
        Enter a year: <input type="number" name="year" required>
        <input type="submit" name="submit" value="Submit ">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $year = $_POST['year'];

        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            echo "<h3>$year is a leap year.</h3>";
        } else {
            echo "<h3>$year is not a leap year.</h3>";
        }
    }
    ?>
</body>
</html>
