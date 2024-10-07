<?php

// Logical Operators -- 

var_dump(100 > 60 and 100 > 40 and 100 > 50);
echo "<br>";
var_dump(100 > 60 and 100 > 40 and 100 > 50 and 100 > 120);
echo "<br>";
var_dump(100 > 60 and 100 > 40 and 100 > 50 or 100 > 120);
echo "<br>";
var_dump(100 > 120 or 100 > 100 or 100 > 140 or 100 > 90);
echo "<br>";
var_dump(100 > 120 xor 100 > 120);
echo "<br>";
var_dump(100 > 120 xor 100 > 90);
echo "<br>";
// String Operators 

echo "<hr>";
$x = 1 ? 1 : 1;
echo $x . "<br>";
$x = 0 ? 0 : 1;
echo $x . "<br>";
$x = 1 ? 0 : 1;
echo $x . "<br>";
$x = 1 ? 0 : 0;
echo $x . "<br>";


$array = ["hazem", "mohamed", "gad", "omar"];
for ($i = 0; $i < count($array); $i++) {
    switch ($array[$i]) {
        case "hazem":
            echo "Hello hazem How are you ?" . "<br>";
            break;
        case "mohamed":
            echo "hello mohamed how are you ? " . "<br>";
            break;
        case "gad":
            echo "hello gad how are you ? " . "<br>";
            break;
        case "omar":
            echo "hello omar how are you ? " . "<br>";
            break;
    }
}


echo "<div style='color: #333; font-family: cursive; display: grid; grid-template-columns: repeat(10, 1fr); padding: 10px; margin: 20px; gap: 10px; background-color: #f8f9fa;'>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "<div style='background-color: #ffc107; padding: 10px; text-align: center; border: 1px solid #333;'>FizzBuzz</div>";
    } elseif ($i % 3 == 0) {
        echo "<div style='background-color: #007bff; padding: 10px; text-align: center; border: 1px solid #333;'>Fizz</div>";
    } elseif ($i % 5 == 0) {
        echo "<div style='background-color: #28a745; padding: 10px; text-align: center; border: 1px solid #333;'>Buzz</div>";
    } else {
        echo "<div style='padding: 10px; text-align: center; border: 1px solid #333;'>$i</div>";
    }
}
echo "</div>";
function reverseString($str)
{
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

// Test cases with some styling
echo "<div style='font-family: Montserrat, sans-serif; padding: 20px; background-color: #f0f0f0; border: 1px solid #ddd; border-radius: 8px;'>";
echo "<h2 style='color: #4A90E2;'>Reversed Strings</h2>";
echo "<div style='background-color: #d1e7dd; padding: 10px; margin-bottom: 10px; border: 1px solid #0f5132;'>Original: hello<br>Reversed: " . reverseString("hello") . "</div>";
echo "<div style='background-color: #f8d7da; padding: 10px; margin-bottom: 10px; border: 1px solid #842029;'>Original: PHP is awesome<br>Reversed: " . reverseString("PHP is awesome") . "</div>";
echo "</div>";
