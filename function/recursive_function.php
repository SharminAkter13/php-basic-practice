<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive Function</title>
</head>
<body>
    <!-- A recursive function is a function that calls itself within its own definition -->
     <h4>Recursive Function</h4>
    <?php
    function fact($m){
        if($m<=8){
            echo"$m <br>";
            fact($m+1);
        }
    }
    fact(3);
    ?>
</body>
</html>