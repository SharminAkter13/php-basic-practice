<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow Function</title>
</head>
<body>
    <h1>Arrow Function</h1>
    <?php
    $greet =fn()=>"Assalamu Walaikum";
    echo $greet();
    echo "<br>";

    $cars=fn($brand,$model,$price)=> "$brand cars"."$model runs like no one."."It's price is high in the market which is now $price";
   echo $cars("Ferrari","FM-21324","$1 million");
    ?>
</body>
</html>