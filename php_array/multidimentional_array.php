<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//     $students = array(
//     "Anjali" => array("age" => 25, "grade" => "A"),
//     "GFG" => array("age" => 22, "grade" => "B");
// );
// echo $students["GFG"]["age"]; 
?>

<?php

$students = array(
    "Anjali" => array(
        "age" => 25,
        "grade" => "A"
    ),
    "GFG" => array(
        "age" => 22,
        "grade" => "B"
    )
);

echo $students["GFG"]["age"];  // Outputs: 22

?>

</body>
</html>