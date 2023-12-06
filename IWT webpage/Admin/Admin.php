<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css">
    <title>Fresh Hub Admin</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #3498db;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar {
            display: flex;
            align-items: center;
        }

        .logo h1 {
            color: #fff;
            font-size: 24px;
            margin: 0;
            margin-left: 15px;
        }

        .admin-info {
            display: flex;
            align-items: center;
            margin-left: 50px;
        }

        .admin-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <h1>Fresh Hub</h1>
            </div>
            <div class="admin-info">
                <img src="stein.jpg" alt="Admin Image">
                <p>Thanujan</p>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="Display.php">Registration Details</a></li>

                <li><a href="#">Payment Details</a></li>
            </ul>
        </nav>
    </header>
    <main>
    </main>
</body>

</html>