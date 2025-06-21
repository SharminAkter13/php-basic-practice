<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable scope</title>
</head>
<body>
    <h1>variable scope</h1>
    <h4>global variable scope </h4>
      
    <?php
    $a = 1;
    $b=4;
    function add(){
        global$a,$b, $test;
        $test =$a+$b;
        echo $test. "<br>";
    }
    add();
    ?>

    <?php
    $a = 1;
    $b = 2;

    function Sum()
    {
        global $a, $b;

        $b = $a + $b;
    } 

    Sum();
    echo $b;
    ?>

    <h4> superglobals and scope</h4>

    <?php
    function test_superglobal()
    {
        echo $_SERVER['SERVER_NAME'];
    }
    test_superglobal();
    ?>

     <h4>static variables</h4>

    <?php
    function test()
    {
        static $a = 10;
        echo $a;
        $a++;
    }
    test();
    ?>


</body>
</html>