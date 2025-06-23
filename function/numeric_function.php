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
  
    <h1>range function</h1>
    <!-- array range(low, high, step) -->
    <?php
    $N =range(0,8);
    var_dump($N);
    echo "<br>";
    echo "<br>";

    foreach ($N as $M){
        echo ("$M" .",");
    }
    ?>

<?php
    $S =range(0,38,4); //step respectively so it returns an array with 
    // elements starting from 0 to 38 incremented by 3
   
    echo "<br>";
    echo "<br>";

    foreach ($S as $T){
        echo ("$T" .",");
    }
    ?>
    
</body>
</html>