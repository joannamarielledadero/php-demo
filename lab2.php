<!DOCTYPE html>
<html>

<head>
    <title>Lab 2 - Temperature Converter</title>
</head>
<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    * {
        margin: 0;
        padding: 0;
        font-family: Verdana;
        outline: none;
        border: none;
        text-decoration: none;
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-behavior: smooth;
        scroll-padding-top: 110px;
    }

    body {
        background: #bae6fd;
        color: #0f172a;
    }

    header {
        width: 100%;
        padding: 25px 200px;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    header h1 {
        font-size: 26px;
        color: #0284c7;
    }

    .navbar a {
        font-size: 18px;
        color: #0369a1;
        margin-left: 25px;
        transition: 0.3s ease;
        border-bottom: 2px solid transparent;
        padding-bottom: 5px;
    }

    .navbar a.active,
    .navbar a:hover {
        color: #0284c7;
        border-bottom: 2px solid #0284c7;
    }

    .container {
        margin-top: 60px;
        font-size: 18px;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 0 200px;
        gap: 25px;
    }

    .container form,
    .container h3 {
        background: white;
        padding: 20px 25px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .container form {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    input[type="number"] {
        padding: 10px;
        border: 2px solid #7dd3fc;
        border-radius: 8px;
    }

    input[type="submit"] {
        padding: 10px 15px;
        background: #0ea5e9;
        color: white;
        border-radius: 8px;
    }

    .container h2 {
        color: #0284c7;
    }

    .container h3 {
        color: #0369a1;
    }
</style>

<body>

    <header>

        <h1> Temperature Converter </h1>

        <nav class="navbar" data-navbar>

            <a href="lab1.php">Laboratory 1</a>
            <a href="lab2.php" class="active">Laboratory 2</a>
            <a href="lab3.php">Laboratory 3</a>
        </nav>
    </header>

    <div class="container">
        <form method="post">
            <label>Enter Celsius:</label>
            <input type="number" name="celsius" required>
            <input type="submit" name="convert" value="Convert to Fahrenheit">
        </form>


        <?php
        // TODO: Create function celsiusToFahrenheit($celsius)
        // Formula: Fahrenheit = (Celsius × 9/5) + 32
        // Return the calculated value

        function celsiusToFahrenheit($celsius)
        {
            return ($celsius * 9 / 5) + 32;
        }

        if (isset($_POST['convert'])) {
            $celsius = $_POST['celsius'];
            $fahrenheit = celsiusToFahrenheit($celsius);

            echo "<h2>Result: </h2>";
            echo "<h3>$celsius °C is equal to $fahrenheit °F</h3>";
        }

        // TODO: Check if form was submitted
        // TODO: Get the celsius value from $_POST
        // TODO: Call the function and display result
        ?>
    </div>
</body>

</html>