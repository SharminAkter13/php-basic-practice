<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php data type</title>
</head>
<body>
    <h1>php data type</h1>
    <h4>null</h4>
    <?php
    $v =null;
    var_dump( $v);
    ?>

    <h4>boolean</h4>
    <?php
    $x =false;
    echo $x;
    var_dump($x)
    ?>

    <h4>integer</h4>

    <?php
    $large_number = 50000000;
    var_dump($large_number);      
    ?>
     <h4>float</h4>

    <?php
    $number = 5000.1010;
    var_dump($number);      
    ?>

     <h4>string</h4>

    <?php
    $text = "this is string";
    var_dump($text);      
    ?>

     <h4>numeric string</h4>

    <?php
    var_dump("0D1" == "000"); 
    var_dump("0E1" == "000"); 
    var_dump("2E1" == "020");
    ?>

     <h4>array</h4>

    <?php
    $array = array("fool", "bar", "hello", "world");
    var_dump($array);
    ?>
        

</body>
</html>