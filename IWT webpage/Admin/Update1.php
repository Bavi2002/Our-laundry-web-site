<?php

include 'config.php';

$userid = $_GET['updateid'];


$sql = "select * from users1 where id = $userid";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$firstname = $row['fname'];
$lastname = $row['lname'];
$address=$row['address'];
$contactno=$row['contact'];
$email = $row['email'];

if (isset($_POST['submit'])) {
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $address=$_POST['address'];
    $contactno=$_POST['contact'];
    $email=$_POST['email'];

    $sql = "update users1 set id ='$userid',fname = '$firstname',lname = '$lastname',address='$address',contact='$contactno',email = '$email'
    where id = $userid";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data updated successfully";
        header('location: Display.php');
    } else {
        // die(mysqli_error($con));
        echo "Error updating data: " . mysqli_error($conn);

    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE ADMIN PAGE</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .Customer-form {
            text-align: left;
            padding: 10px;
        }

        label {
            font-weight: bold;
        }

        .text, .contact, .email {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="Customer-form" method="POST">
            <label>First name:</label>
            <input class="text" id="firstname" name="fname" type="text" placeholder="Enter your first name" required
                autocomplete="off" value=<?php echo $firstname ?>>

            <br>
            <br>   

            <label>Last name:</label>
            <input class="text" id="lastname" name="lname" type text placeholder="Enter your last name" required
                autocomplete="off" value=<?php echo $lastname ?>>

            <br>
            <br>

            <label>Address:</label>
            <input class="text" id="address" name="address" type="text" placeholder="Enter your Address" required
                autocomplete="off" value=<?php echo $address ?>>

            <br>
            <br>

            <label>Contact-no:</label>
            <input class="contact" id="contactno" name="contact" type="number" placeholder="Enter your Contact no" pattern="[0-9]{10}" maxlength="10" required
                autocomplete="off" value=<?php echo $contactno ?>>

            <br>
            <br>

            <label>Email:</label>
            <input class="email" id="email" name="email" type="text" placeholder="Enter your email" required
                autocomplete="off" value=<?php echo $email ?>>

            <br>
            <br>

            <button type="submit" name="submit" value="submit">Update</button>
        </form>
    </div>
</body>
</html>
