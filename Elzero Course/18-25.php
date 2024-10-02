<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/index.css">
</head>

<body>
</body>

</html>
<?php

// For Constant Variables

define('PI', 22 / 7, false);
echo PI . "<br>";
echo PI * 50 . "<br>";
echo "<hr>";
echo php_uname() . "<br>";
echo phpversion() . "<br>";
echo __LINE__ . "<br>";
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";

// Assignment --  Operators ++

echo "<hr>";
echo "<div class='grid-container'>";

$a = $b = $c = $d = $e = 10;


$a += 10;
$b -= 5;
$c %= 5;
$d *= 5;
$e **= 5;
echo "<p class='grid-item'> [+=] " . $a . "</p>";
echo "<p class='grid-item'> [-=]" . $b . "</p>";
echo "<p class='grid-item'>" . $c . "</p>";
echo "<p class='grid-item'>" . $d . "</p>";
echo "<p class='grid-item'>" . $e . "</p>";

echo "</div>";

// Comparison Operator -- 22
// Test equal -- 
echo "<div class= 'Comparison'>";
echo "<h1>Test equal : </h1>";
var_dump(100 == 100);
echo "<br>";
var_dump(100 == "100");
echo "<br>";
var_dump(100.0 == "100");
echo "<br>";
var_dump(100.0 == 100);
echo "<br>";
var_dump(100 != "100"); // False
echo "<br>";

// Test identical
echo "<h1> Test identical :  </h1>";
var_dump(100 === 100); // True 
echo "<br>";
var_dump(100 === "100"); // False
echo "<br>";
var_dump(100.0 === "100"); // False 
echo "<br>";
var_dump(100.0 === 100); // False
echo "<br>";
var_dump(100.0 !== 100); // False
// Test 3
echo "<h1>Test 3 <$> </h1>";
var_dump(100 > 40);
echo "<br>";
var_dump(100 > 100);
echo "<br>";
var_dump(100 >= 100);
echo "<br>";
var_dump(100 >= 110);
echo "<br>";
var_dump(100 >= 100);
echo "<br>";
var_dump(100 <=> 200); // -1 
echo "<br>";
var_dump(100 <=> 100); // 0
echo "<br>";
var_dump(100 <=> 50); // 1
echo "</div>";
$i = 0;
$username = "hazem mohamed";
echo <<<"here"
    hello from the code here 
    i can write what i need 
    // without care about the rules
    of the php like // and the n\
    and Can print Var like [$i]
    and all the Var i need So it's So important For Us >>>>> 
    <div style = 'color: red; border: 1px solid white; padding: 10px;'>
    <p>hello world form the php file here my html tag </p>
    <p>hello world form the php file here my html tag </p>
    <p>hello world form the php file here my html tag </p>
    <p>hello world form the php file here my html tag </p>
    </div>
here;

?>