<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find largest number</title>
</head>
<body>
<form action="" method=POST>
    Number X: <br />
    <input
            type="text"
            name="fname1"
            placeholder="please enter your name"
          />
          <br /><br />
          Number Y: <br />
          <input
            type="text"
            name="email1"
            placeholder="please enter your email"
          />
          <br /><br />
          Number Z: <br />
          <input
            type="text"
            name="email1"
            placeholder="please enter your email"
          />
          <br /><br />
          
</form>
    <?php
    $x =3;
    $y =4;
    $z =5;
    if(($x>$y)&&($x>$z)){
        echo "The Largest Number is X: $x";
    }elseif(($y>$x)&&($y>$z)){
        echo "The Largest Number is Y: $y";
    }else{
        echo "The Largest Number is Z: $z";
    }
    ?>
    
</body>
</html>