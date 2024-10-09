<?php



function square($n)
{
    return $n * $n;
}
function POWER($n)
{
    return $n ** $n;
}
// Original array
$numbers = [1, 2, 3, 4, 5];

// Applying array_map to square each element
$squared = array_map('square', $numbers);
$POW = array_map('POWER', $numbers);

// Output the result
print_r($squared);
echo "<br>";
print_r($POW);
echo "<br>";
