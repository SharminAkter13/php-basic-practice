<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Function</title>
</head>
<body>
    <h4>Numeric Function</h4>
    <?php
    function n(){
        echo is_numeric(154);
    }
    n();
    echo "<br>";
    
    function m(){
        echo ("Round: ".round(154.65));
    }
    m();
    echo "<br>";
    
    function o(){
        echo ("Random Number: ".rand(154,255));
    }
    o();
    echo "<br>";
    
  ?>
    
</body>
</html>