<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    section {
        padding: 25px 200px;
    }

    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1;
        background: rgba(253, 242, 242, 0.859);
        padding: 30px 210px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    header .navbar a {
        color: #333;
        font-size: 20px;
        padding: 0 15px;
    }

    header .navbar a:hover {
        color: rgb(255, 255, 255);
        background-color: #dc2f7e;
        padding: 25px 15px;
    }

    .home {
        min-height: 100vh;
        background: url('col.jpg') no-repeat center center;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .home .home-text h1 {
        font-size: 60px;
        color: #dc2f7e;
        position: relative;
        text-align: center;
        top: -40px;

    }
</style>

<body>

    <header>

        <nav class="navbar" data-navbar>

            <a href="lab1.php" class="navbar-link label-medium active">Laboratory 1</a>
            <a href="lab2.php" class="navbar-link label-medium">Laboratory 2</a>
            <a href="lab3.php" class="navbar-link label-medium">Laboratory 3</a>


        </nav>
    </header>

    <section class="home" id="#home">

        <div class="home-text">
            <h1>WELCOME TO THE PHP LABS</h1>
        </div>
    </section>

</body>

</html>