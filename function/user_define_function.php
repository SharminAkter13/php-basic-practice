<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Define Function</title>
</head>
<body>
    <h4>User Define Function</h4>
    <?php
    function addition($a,$b){
        $c= $a+$b;
        return $c;
    }
     echo addition(36,2);
     echo "<br>";
    ?>

    <?php
    function Myself($names,$course){
        echo "Myself $names I'm curently learnign $course in IDB.";
    }
     Myself('Sharmin Akter', 'WDPF');
    ?>
   
</body>
</html>