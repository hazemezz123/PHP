<?php


$array = [
    "order1" => [' saladOrder', 1200, 3],
    "order2" => [' KoftaOrder', 1500, 5],
    "order3" => [' FishOrder', 2000, 5],
    "order4" => [' KonafaOrder', 4000, 3],
    "order5" => [' KosKosOrder', 3500, 2],
];


foreach ($array as $key => $value) {
    echo "=> " .  $key . $value[0] . "<br>";
    $total = $value[1] * $value[2];
    echo "Your total is : for $key is $total " . "<br>";
    $total_Tax = $total * 0.15;
    echo "Your Total after adding tax is : for $key is $total_Tax " . "<br>";
}


echo <<<"Hoza"
// $$ %% /////
<select>    
<option>hazem</option> 
<option>gad</option>
<option>omar</option>
<option>hoda</option>
<option>hafez</option>
</select>
Hoza;
