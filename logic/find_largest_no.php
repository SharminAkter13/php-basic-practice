<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Largest Number</title>
</head>
<body>
    <h3>Find the Largest of Three Numbers</h3>

    
    <form method="post">
    Number X:
    <input type="number" name="numX" id="numX" required><br><br>
    Number Y:
    <input type="number" name="numY" id="numY" required><br><br>
    Number Z:
    <input type="number" name="numZ" id="numZ" required><br><br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php
   
    if(isset($_POST['submit'])){
        $x = $_POST['numX'];
        $y = $_POST['numY'];
        $z = $_POST['numZ'];

        echo "<h4>Results :</h4>";
        echo "<p>You entered X: $x, Y: $y, Z: $z</p>";

        if(($x>$y) && ($x>$z)){
            echo "<p>The Largest Number is X: <strong>$x<strong></p>";
        }elseif(($y>$x) && ($y>$z)){
            echo "<p>The Largest Number is Y: <strong>$y<strong></p>";
        }else{
            echo "<p>The Largest Number is Z: <strong>$z<strong></p>";
        }
    }
    ?>
</body>
</html>