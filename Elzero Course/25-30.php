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

$lines = 5;
for ($i = 1; $i <= $lines; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
