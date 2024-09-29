<?php
// function CallMyName()
// {
//     echo "hello from the function" . "<br>";
// };


// CallMyName();

// function add($num1, $num2)
// {
//     return $num1 + $num2 . "<br>";
// }
// $result = add(2, 3);
// echo $result;

$Function1 = function ($name) {
    return "hello my Amigo : <br> " . $name . " Your score is : 100" . "<br>";
};

echo $Function1("hazem mohamed");

$Function2 = fn($name) =>
"hello : " . $name  . "<br>";
echo $Function2("Gad");

$string = "hazem , From the php file ";
//  String method
echo strlen($string) . "<br>";
echo strpos($string, "z") . "<br>"; // return the position of the letter (Sec parameter)
echo strtoupper($string) . "<br>";
$sub = print substr($string, 2, 10) . "<br>";
echo (gettype($sub)) . "<br>";
$hello = "hello world";
$explode = print_r(explode("o", $hello)) . "<br>";
echo is_array($explode);
echo "<h1>....</h1>";
// echo $string;1
// number method 
echo "<hr>";
$Number = 5.5;
echo pow($Number, 2) . "<br>";
echo round($Number) . "<br>";
echo rand($Number, 20) . "<br>";


// array method 

$array = [12, 3, 123, 1, 23, 12, 3, 12, 3, 123, 1, 23];
$array_Fruits = ["apple", "banana", "Water melon"];
print_r(sort($array));
echo "the main world is here";
