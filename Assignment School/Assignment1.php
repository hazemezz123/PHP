<?php

// Question number 1 -- Tax Calculation 
$Salary = array(1200, 1000, 1500, 2500, 4500, 5000, 6500);

echo "<div style='font-family: Montserrat, sans-serif; padding: 20px; letter-spacing: 1px'>";
echo "<h1 style='text-align: center; margin-bottom: 20px;'>// Question number 1 -- ?> </h1>";

echo "<div style='display: grid; grid-template-columns: 1fr 1fr; gap: 20px;'>";

for ($i = 0; $i < count($Salary); $i++) {
    echo "<div style='padding: 15px; border: 2px solid #ddd; border-radius: 8px; background-color: #f4f4f4;'>";

    if ($Salary[$i] <= 1000) {
        echo "<strong>Salary:</strong> $" . $Salary[$i] . "<br>";
        echo "<strong>Tax:</strong> $" . $Salary[$i] * 0.03 . "<br>";
    } elseif ($Salary[$i] <= 2000) {
        echo "<strong>Salary:</strong> $" . $Salary[$i] . "<br>";
        echo "<strong>Tax:</strong> $" . $Salary[$i] * 0.05 . "<br>";
    } elseif ($Salary[$i] <= 5000) {
        echo "<strong>Salary:</strong> $" . $Salary[$i] . "<br>";
        echo "<strong>Tax:</strong> $" . $Salary[$i] * 0.07 . "<br>";
    } elseif ($Salary[$i] > 5000) {
        echo "<strong>Salary:</strong> $" . $Salary[$i] . "<br>";
        echo "<strong>Tax:</strong> $" . $Salary[$i] * 0.10 . "<br>";
    } else {
        echo "Enter Valid Salary";
    }

    echo "</div>";
}

echo "</div>";
echo "</div>";



echo "<hr>";

// Question number 2 --  switch & Case
$cities = [
    "New York",
    "Chicago",
    "Philadelphia",
    "San Antonio",
    "Cairo"
];
echo "<div style='font-family: Montserrat, sans-serif; padding: 20px;'>";
echo "<h1 style='text-align: center; margin-bottom: 20px;'>// Question number 2 -- U_U </h1>";

echo "<div style='display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;'>";

for ($i = 0; $i < count($cities); $i++) {
    echo "<div style='border: 2px solid #ddd; padding: 15px; border-radius: 8px; background-color: #f9f9f9; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);'>";

    switch ($cities[$i]) {
        case "New York":
            echo "<span style='font-weight: bold;'>City:</span> " . ($cities[$i]) . "<br>";
            echo "<span style='color: #ff5733;'>Shipping Cost:</span> $120" . "<br>";
            break;

        case "Chicago":
            echo "<span style='font-weight: bold;'>City:</span> " . ($cities[$i]) . "<br>";
            echo "<span style='color: #ff5733;'>Shipping Cost:</span> $100" . "<br>";
            break;

        case "Philadelphia":
            echo "<span style='font-weight: bold;'>City:</span> " . ($cities[$i]) . "<br>";
            echo "<span style='color: #ff5733;'>Shipping Cost:</span> $150" . "<br>";
            break;

        case "San Antonio":
            echo "<span style='font-weight: bold;'>City:</span> " . ($cities[$i]) . "<br>";
            echo "<span style='color: #ff5733;'>Shipping Cost:</span> $200" . "<br>";
            break;

        case "Cairo":
            echo "<span style='font-weight: bold;'>City:</span> " . ($cities[$i]) . "<br>";
            echo "<span style='color: green;'>Shipping Cost:</span> It's free!" . "<br>";
            break;

        default:
            echo "<span style='font-weight: bold;'>City:</span> Unknown<br>";
            echo "<span style='color: red;'>No shipping available.</span>" . "<br>";
            break;
    }

    echo "</div>";
}

echo "</div>";
echo "</div>";


// Question number 3 --  (45) Warning

echo "<div style='font-family: Montserrat, sans-serif; padding: 20px; letter-spacing: 1px;'>";

echo "<h1 style='text-align: center; margin-bottom: 20px;'>// Question number 3 -- ^__~ </h1>";

echo "<div style='display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;'>";

for ($i = 18; $i <= 60; $i++) {
    if ($i == 45) {
        // Warning block when age is 45
        echo "<div style='background-color: #f8d7da; color: red; padding: 15px; border: 2px solid red; border-radius: 10px; text-align: center;'>";
        echo "<strong style='font-size: 18px;'>Warning! Your age is 45</strong>";
        echo "</div>";
        break;
    } else {
        // Regular age blocks
        echo "<div style='background-color: #d1e7dd; padding: 15px; border: 2px solid #0f5132; border-radius: 10px; text-align: center;'>";
        echo "<strong style='font-size: 16px;'>Your age is: " . $i . "</strong>";
        echo "</div>";
    }
}

echo "</div>";
echo "</div>";
