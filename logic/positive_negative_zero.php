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
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php
   
    if(isset($_POST['submit'])){
        $x = $_POST['numX'];
        

        echo "<h4>Results :</h4>";
        
        if ($x > 0) {
            echo "<p> The Number $x is Positive</p>";
            return;
        } elseif ($x < 0) {
            echo "<p> The Number $x is Negative</p>";
            return;
        } else { 
            echo "<p> The Number $x is Zero</p>";
            return;
        }
    }
    
    ?>
</body>
</html>