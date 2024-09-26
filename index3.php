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
echo strlen($string) . "<br>";
echo strpos($string, "z") . "<br>"; // return the position of the letter (Sec parameter)
echo strtoupper($string) . "<br>";
echo substr($string, 2, 10) . "<br>";
print_r(explode(" ", $string));
// echo $string;1
