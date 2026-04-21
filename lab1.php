<!DOCTYPE html>
<html>
<head>
    <title>Lab 1 - My Favorite Fruits</title>
</head>

<style>

  *,
*::before, *::after {
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

body {
    background: #132a63;
    color: #e2e8f0;
}

header {
    width: 100%;
    padding: 25px 200px;
    background: rgba(15, 23, 42, 0.8);
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
}

header h1 {
    font-size: 28px;
    color: #c6d1e2;
}

.navbar a {
    font-size: 18px;
    color: #cbd5f5;
    margin-left: 25px;
    transition: 0.3s ease;
    border-bottom: 2px solid transparent;
    padding-bottom: 5px;
}

.navbar a:hover,
.navbar a.active {
    color: #c6d1e2;
    border-bottom: 2px solid #60a5fa;
}

.container {
    margin-top: 50px;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    gap: 40px;
    padding: 0 450px;
}

.form-box{
    width: 35%;
    background: rgba(255, 255, 255, 0.05);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}



.form-box label {
    font-size: 16px;
    margin-top: 10px;
}

input[type="text"] {
    border: 1px solid #3b82f6;
    padding: 10px;
    width: 100%;
    margin: 5px 0 5px;
    border-radius: 8px;
    background: transparent;
    color: white;
}

input[type="submit"] {
    padding: 10px;
    background: #dc2f7e;
    color: white;
    cursor: pointer;
    border-radius: 8px;
}

.result {
    width: 45%;
    background: rgba(255, 255, 255, 0.05);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.result h2 {
    color: #dc2f7e;
    margin-bottom: 15px;
}

.result ul {
    margin-left: 20px;
    margin-bottom: 20px;
}

.result li {
    margin-bottom: 5px;
}

.result h3 {
    color: #dc2f7e;
}
</style>
<body>

<header>

 <h1> My Favorite Fruits </h1>

   <nav class="navbar" data-navbar>

       <a href="lab1.php" class="active">Laboratory 1</a>
       <a href="lab2.php">Laboratory 2</a>
       <a href="lab3.php">Laboratory 3</a>
      

    </nav>
    </header>

    <section class="container">

<div class="form-box">
   <form method="post">
        <label>Fruit 1:</label>
        <input type="text" name="fruit1"><br><br>

        <label>Fruit 2:</label>
        <input type="text" name="fruit2"><br><br>

        <label>Fruit 3:</label>
        <input type="text" name="fruit3"><br><br>

        <label>Fruit 4:</label>
        <input type="text" name="fruit4"><br><br>

        <label>Fruit 5:</label>
        <input type="text" name="fruit5"><br><br>
        <input type="submit" name="submit" value="Save my fruits">
</form>
</div>
    <!-- TODO: Create a form with method="post" -->
    <!-- Create 5 text inputs: fruit1, fruit2, fruit3, fruit4, fruit5 -->
    <!-- Add a submit button -->
 <?php if (isset($_POST['submit'])): ?>
<div class="result">
    <?php
    if (isset($_POST['submit'])) {
       
    $fruits = array(
        $_POST['fruit1'],
        $_POST['fruit2'],
        $_POST['fruit3'],
        $_POST['fruit4'],
        $_POST['fruit5']        
    );

    echo "<h2>Your Favorite Fruits:</h2>";
    echo "<ul>";
    
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
    echo "<h3>Your favorite fruit is: " . "<span style='color:white;'>" . $fruits[0] . "</span>" . "</h3>";

    }
        // TODO: Check if form was submitted
        // TODO: Create an array called $fruits with the 5 submitted values
        // TODO: Use foreach loop to display each fruit
        // TODO: Display the first fruit (index 0) as favorite
    ?>
</div>
<?php endif; ?>
    </section>

</body>
</html>