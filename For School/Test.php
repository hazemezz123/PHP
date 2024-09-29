<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $items = array("Pasta", "meat", "Pizza");
    $itemPrice = array(100, 200, 300);
    echo "All the mene" . "<br>";
    for ($i = 0; $i < count($items); $i++) {
        echo " item " . $i + 1 . " : " . $items[$i] . " : " .  $itemPrice[$i]  . "<br>";
        $tax = 0.15;
    }
    echo "tax value is  : " . $tax . "<br>";
    echo "<div style = 'color : red  ; '>";
    $order1 =  $items[0] . " + " . $items[1] ;
    $order2 =  $items[2] . " + " . $items[1];
    $order3 =  $items[1] . " + " . $items[0];
    echo "<hr>";
    echo "the orders is : " . "<br>";
    echo $order1 . "<br>";
    echo $order2 . "<br>";
    echo $order3 . "<br>";
    echo "</div>";

?>
</body>

</html>