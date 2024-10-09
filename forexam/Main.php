<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            background: linear-gradient(to right, #a8edea, #fed6e3);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: #f5f5f5;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 1rem;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            transition: 400ms all ease-in-out;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #00bfa5;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 191, 165, 0.8);
        }

        button {
            padding: 10px;
            background-color: #00bfa5;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        button:hover {
            background-color: #009688;
        }

        .error-message,
        .success-message {
            text-align: center;
            margin-top: 15px;
            padding: 10px;
            font-size: 0.9rem;
        }

        .error-message {
            color: white;
            background-color: #e74c3c;
        }

        .success-message {
            color: white;
            background-color: #2ecc71;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Submit Your Details</h2>
        <form action="" method="POST">
            <label for="user">Name:</label>
            <input type="text" name="user" id="user" placeholder="Enter your name..." required>

            <label for="age">Age:</label>
            <input type="number" name="age" id="age" placeholder="Enter your age..." required min="1" max="120">

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize inputs
            $name = htmlspecialchars(trim($_POST["user"]));
            $age = htmlspecialchars(trim($_POST["age"]));

            // Basic validation
            if (empty($name) || empty($age)) {
                echo "<div class='error-message'>Please fill in all fields.</div>";
            } elseif (!is_numeric($age) || $age <= 0 || $age > 120) {
                echo "<div class='error-message'>Please enter a valid age (between 1 and 120).</div>";
            } else {
                // Display the output if valid
                echo "<div class='success-message'>The name is: $name <br> and the age is: $age.</div>";
            }
        }
        ?>
    </div>
</body>

</html>