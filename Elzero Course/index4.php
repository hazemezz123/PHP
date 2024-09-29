<?php

// start 16 - el zero - (assigned by value & assigned by reference)
$a = "osama";
$b = &$a;

$b = "El zero";
echo $a . "<br>";
echo "<hr>";
// End 16 - el zero 


// Start 17 - el zero Built in Variables --
// print_r($_SERVER);


echo "<pre>";
if (isset($_GET['username'])) {
    echo $_GET['username']; // Accessing 'username' key from $_GET array
} else {
    echo "No username entered.";
}
echo "</pre>";
echo "<hr>";
?>

<form action="" method="get">
    <input type="text" name="username">
    <input type="submit" value="Send">
</form>
<!-- end of the Code ?? -->