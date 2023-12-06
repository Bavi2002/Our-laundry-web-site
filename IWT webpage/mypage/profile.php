<?php
include 'config.php';
session_start();

$user = $_SESSION['PROFILE'];



if (!isset($_SESSION['PROFILE'])) {
    header('location: http://localhost/mypage/register.php');
    exit(); // Ensure the script stops executing
}

if (isset($_GET['logout'])) {
    unset($_SESSION['PROFILE']);
    session_destroy();
    header('location: http://localhost/mypage/login.php');
    exit(); // Ensure the script stops executing
}

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users1 WHERE id='$user'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="head1">
        <a class="logo" href="https://localhost/mypage/navbar.php"> <span>Fresh Hub</span></a>
        <nav>
            <ul class="nav_link1">
                <li><a class="navii" href="https://localhost/mypage/navbar.php">Home</a></li>
                <li>
                    <a class="navii" href="https://localhost\mypage\product_view.php">Service</a>
                </li>
                <li>
                    <a class="navii" href="https://localhost/mypage/contact.php">Contact Us</a>
                </li>
                <li>
                    <a class="navii" href="https://localhost\mypage\aboutus.php">About Us</a>
                </li>
                <li>
                    <a class="navii" href="#">My Account</a>
                </li>
                <li>
                    <a href="https://localhost/mypage/register.php"><button class="nav_btn">Register</button></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container">

        <header>
            <h1>User Profile</h1>
        </header>
        <img src="images/useraccount.png" alt="Profile Photo" class="profile-photo">
        <ul>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><b>First Name:</b> " . $row['fname'] . "</li>";
                echo "<li><b>Last Name:</b> " . $row['lname'] . "</li>";
                echo "<li><b>Address:</b> " . $row['address'] . "</li>";
                echo "<li><b>Contact-no:</b> " . $row['contact'] . "</li>";
                echo "<li><b>E-mail:</b> " . $row['email'] . "</li>";
            }
            ?>
        </ul>
        <div class="profile-actions">
            <a href="update.php" class="btn update-btn">Update Profile</a>
            <a href="logout.php" class="btn logout-btn">Logout</a>
            <a href="delete.php" class="btn delete-btn">Delete</a>
        </div>
    </div>

</body>

</html>