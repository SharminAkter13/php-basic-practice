<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Function</title>
</head>
<body>
    <h4>Anonymous Function</h4>
    <?php
    $sub = function($a,$b){
        $c=$a-$b;
        return $c;
    };
    echo $sub(15,5);
    echo "<br>";

    $v=function(){
        echo "This is Anonymous function";
    };
    $v();

    ?>
</body>
</html>