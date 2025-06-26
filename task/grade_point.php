<!DOCTYPE html>
<html>
<head>
    <title>Grade Point Calculator</title>
</head>
<body>
    <h2>Grade Point Calculator</h2>

    <form method="post" action="">
        Enter your mark: <input type="number" name="mark" min="0" max="100" required>
        <input type="submit" name="submit" value="Get Grade Point">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $mark = $_POST['mark'];
        $gradePoint = "";

        if ($mark >= 80 && $mark <= 100) {
            $gradePoint = "5.00 (A+)";
        } elseif ($mark >= 70) {
            $gradePoint = "4.00 (A)";
        } elseif ($mark >= 60) {
            $gradePoint = "3.50 (A-)";
        } elseif ($mark >= 50) {
            $gradePoint = "3.00 (B)";
        } elseif ($mark >= 40) {
            $gradePoint = "2.00 (C)";
        } elseif ($mark >= 33) {
            $gradePoint = "1.00 (D)";
        } else {
            $gradePoint = "0.00 (F)";
        }

        echo "<h3>Your Grade Point: $gradePoint</h3>";
    }
    ?>
</body>
</html>
