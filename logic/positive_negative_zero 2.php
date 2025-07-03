<?php 
 
// $n=array(2,-1,-5,9,10,0);
// //now loop through the array and separate
// foreach($n as $num){
//    if($num > 0){
//       $positive[] = $num;
//    }
//    if($num < 0){
//       $negative[] = $num;
//    }
//    if ($num ===0){ 
//     $zero[] = $num;
//    }
// }
// echo "Positive Number: ";
// print_r($positive);
// echo "<br>";
// echo "Negetive Number: ";
// print_r($negative);
// echo "<br>";
// echo "Zero Number: ";
// print_r($zero);

$num =array(3,9,-5,4,7,0,12,0,-8,-7);
foreach($num as $number){
    if($number>0){
        $positive[]=$number;
    }if($number<0){
        $negative[]=$number;
    }if($number>0){
        $zero[]=$number;
    }
}
echo "Positive Number: ";
print_r($positive);
echo "<br>";
echo "Negative Number: ";
print_r($negative);
echo "<br>";
echo "zero Number: ";
print_r($zero);
?>