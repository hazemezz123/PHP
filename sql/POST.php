<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-container label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 8px;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h1>Contact Us</h1>
        <form action="process_get.php" method="get">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" placeholder="Your message" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
<?php

// Check if form data has been submitted
if (isset($_GET['name'], $_GET['email'], $_GET['message'])) {
    $name = htmlspecialchars($_GET['name']);  // Sanitize the input
    $email = htmlspecialchars($_GET['email']);
    $message = htmlspecialchars($_GET['message']);

    // Basic validation (you can add more as needed)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Display the submitted data
        echo "<h2>Form Submission Details:</h2>";
        echo "<strong>Name:</strong> " . $name . "<br>";
        echo "<strong>Email:</strong> " . $email . "<br>";
        echo "<strong>Message:</strong> " . nl2br($message) . "<br>";  // Preserve line breaks in the message
    } else {
        echo "<p style='color:red;'>All fields are required. Please fill out the form completely.</p>";
    }
} else {
    echo "<p style='color:red;'>Form data not submitted correctly.</p>";
}

?>

</html>