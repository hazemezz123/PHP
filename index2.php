<?php

// Boolean And Converting To Boolean

var_dump((bool) "");
echo "<br>";
var_dump((bool) 0);
echo "<br>";
var_dump((bool) array());
echo "<br>";
var_dump((bool) []);
echo "<br>";
var_dump((bool) "0");
echo "<br>";
var_dump((bool) [1, 2, 3]);
echo "<br>";
var_dump((bool) 0.2);
echo "<br>";

// String % escaping

echo "'hello world'" . "<br>";
echo '"hello world"' . "<br>";
echo "hello \"world\"" . "<br>";
echo "hello world \\" . "<br>";
echo nl2br("hello world 
for My php File") . "<br>";

// --- Heredoc
$Name = "Hazem";
echo <<<"here"
Hello My name is : <h1>$Name</h1>  
here;
//  Nowdoc
echo <<<'Now'
Hello My name is : """" ''' \\\\ //// <h1>$Name</h1>  
Now;


// DataType -- array
echo "<hr>";
echo "<pre>";
print_r([
    "a" => "ahmed",
    "H" => "Hazem",
    "r" => "Rawhany",
    2 => "Mohamed",
    34 => "Gad",
    4 => "Omar",
    6 => "Mahmoud",
    "Fat7e" => [
        1,
        2,
        3 => [4, 5, 6]
    ],
]);
echo "</pre>";

// Start with Variables 

$username = "Osama";
$Username = "Ahmed";

echo $username . "<br>";
echo $Username . "<br>";
echo "hello world from the user :  $Username" . "<br>";
echo 'hello world from the user :  $Username' . "<br>";
