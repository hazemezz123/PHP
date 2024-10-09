<?php


$conn = new mysqli('localhost', 'root', '', 'we_ats');

// print the error error 
if ($conn->connect_error) {
    die('' . $conn->connect_error);
}

// Update(UPDATE) Update values depending on Condition like here 
// We have  -- WHERE id = 12 ; --
$sql = "UPDATE students SET name = 'Gad' WHERE id = 12";
$result = $conn->query($sql);
if ($result === TRUE) {
    echo "the row update Successfully !";
} else {
    echo "error has been occur";
}
