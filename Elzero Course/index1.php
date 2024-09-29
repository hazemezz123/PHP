<?php
// single line comment 
/* multiple Line Comment */

// Print Section
echo "hell world";
echo "<h1> hello world </h1>";
echo "<div><h1> hello world <span> Bogs? </span> <br> End?</h1></div>";
print "the hide side of the future and the make of ";
// end of print section 

echo "<hr style='hight: 400px;'>";

// Start of DataType
echo "<div style='border: 2px , solid , red ; padding: 10px ; align-text:center'>";
echo gettype(true) . "<br>";;
echo gettype("hello world") . "<br>";
echo gettype(1000) . "<br>";
echo gettype(0) . "<br>";
echo gettype(-100) . "<br>";
echo gettype(75.9) . "<br>";
echo gettype(array("eg" => "egypt", "USA" => "​United States of America", "Jor" => "Jordan")) . "<br>";
echo "</div>";
// End of Datatype

// Type juggling <?
echo 1 + "2" . "<br>"; // => 3
echo gettype(1 + "2") . "<br>"; // => integer

echo 5  + "5 Parts" . "<br>"; // Warning -- => 10   
echo gettype(5  + "5 Parts") . "<br>"; // Warning -- => integer   

echo 10 + 11.5 . "<br>"; // 21.5 
echo gettype(10 + 11.5) . "<br>"; // Double || Float


// Type Casting <?
echo 5 +  "120 Goal" . "<br>"; // 125  Warning !! 
echo 5 + (int) "120 Goal" . "<br>"; // 125 without Warning !! 
echo gettype(5 + (int) "120 Goal") . "<br>"; // integer without Warning !! 

echo 5 +  12.9 . "<br>"; // 17.9
echo 5 + (int) 12.9 . "<br>"; // 17
echo gettype(5 + (int) 12.9) . "<br>"; // integer

echo 10.5 + 10.5 . "<br>"; // 21 integer
echo (int) 10.5 + (int) 10.5 . "<br>"; // 21 integer 
echo gettype(10.5 + 10.5) . "<br>"; // 21 double 
echo (int) (11.1 + 22.2) . "<br>"; // 33 integer 
echo gettype((int) (11.1 + 22.2)) . "<br>"; // integer




