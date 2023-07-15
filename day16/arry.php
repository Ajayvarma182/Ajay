<?php
// using print_r
$array1 = array("key1"=>50,"key2"=>70,"key3"=>30);
print_r($array1);
echo "<br>";
$array2 = array(50,20,40,30);
print_r($array2);
echo "<br>";
$array_brackets = ["50","20","40","30"];
print_r($array_brackets);
// using var_dump
echo "<br>";
echo "<br>";
echo "<br>";
$array1 = array("key1"=>50,"key2"=>70,"key3"=>30);
var_dump($array1);
echo "<br>";
$array2 = array(50,20,40,30);
var_dump($array2);
echo "<br>";
$array_brackets = ["50","20","40","30"];
var_dump($array_brackets);
echo "<br>";
echo "<br>";
echo "<br>";
// multidimensional array
echo "-:multidimensional array:-";
echo "<br>";
$array3 = array(
    "first"=>array("first_first"=>50,"first_second"=>30,"first_third"=>70),
    "second"=>array("second_first"=>150,"second_second"=>130,"second_third"=>170),
    "third"=>array("third_first"=>250,"third_second"=>230,"third_third"=>270)
);
var_dump($array3);
// 3d array
echo "<br>";
echo "<br>";
echo "<br>";
$array4 = array(
"first"=>array("first_first"=>50,"first_second"=>30,"first_third"=>70),
"second"=>array("second_first"=>150,"second_second"=>array("second_second_first"=>"sub sub array"),"second_third"=>170)
);
var_dump($array4);
//sort array
echo "<br>";
echo "<br>";
echo "<br>";
// sort($array_brackets);
// foreach($array_brackets as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
// }
// echo "<br>";
// asort($array2);
// foreach($array2 as $x => $x_value) {
//     echo "Key=" . $x . ", Value=" . $x_value;
//     echo "<br>";
// }
sort($array_brackets);
print_r($array_brackets);
echo "<br>";
asort($array2);
print_r($array2);

// rsort($array1);
// ksort($array2);
// print_r($array1);
// print_r($array2);

?>