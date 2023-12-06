<?php
include 'config.php';



if (isset($_POST['submit'])) {

   $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $contact = mysqli_real_escape_string($conn, $_POST['contact']);
   $address = mysqli_real_escape_string($conn, $_POST['address']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['pass']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpass']));

   $select = mysqli_query($conn, "SELECT * FROM `users1`  WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if (mysqli_num_rows($select) > 0) {
      // $message[] = 'user already exist';
      die("user already exist");
   } else {

      if (strlen($_POST['pass']) < 8) {
         die("password must be at least 8 characters");
      }

      if (!preg_match("/[a-zA-Z]/", $_POST['pass'])) {
         die("password must contain at least one letter");
      }

      if (!preg_match("/[0-9]/", $_POST['pass'])) {
         die("password must contain at least one number");
      }

      if ($_POST['pass'] !== $_POST["cpass"]) {
         die("password do not match");
      }

      if ($pass !== $cpass) {
         $message[] = 'password not match';
      } else {
         $insert = mysqli_query($conn, "INSERT INTO `users1` (fname, lname, email, contact, address, password) VALUES ('$fname', '$lname', '$email', '$contact', '$address', '$pass')") or die('query failed');
         if ($insert) {
            echo "Data inserted successfully";
            header('location: loginsucess.php');
         } else {
            echo "Data inserted unsuccessfull";
            die(mysqli_error($conn));
         }
      }
   }
}

?>

<!DOCTYPE html>

<head>

   <title>Registration page</title>
   <link rel="stylesheet" type="text/css" href="register.css">
   <link href="https://fonts.googleapis.com/css2?family=Mooli&family=PT+Sans&display=swap" rel="stylesheet">

</head>

<body>

   <div class="center-box">

      <form method="post">
         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo  $message;
            }
         }
         ?>
         <h2 class="regis">Registration</h2>
         <!-- <div class="down"> -->

         <!--first name ,lastname-->
         <div class="name">
            <name>Name</name>
            <input type="text" id="Firstname" name="firstname" placeholder=" Enter your first name" required>
            <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required><br><br>
         </div>

         <!-- Address-->
         <div class="address">
            <ad>Current Address</ad>
            <input type="address" id="address" name="address" placeholder="Permenant address" required><br><br>
         </div>

         <!--Contact number-->
         <div class="Contact-no">
            <co>Contact number</co>
            <input type="tel" id="Contact-no" name="contact" pattern="[0-9]{10}" maxlength="10" required><br><br>
         </div>

         <!--Email address-->
         <div class="Email">
            <mail>Your E-mail address</mail>
            <input type="Email" id="Email" name="email" placeholder="12345678@gmail.com" required><br><br>
         </div>

         <!--pass-->
         <div class="password">
            <password>password</password>
            <input type="password" id="password" name="pass"><br><br>

            <conpass>Confirm pass</conpass>
            <input type="password" class="conp" id="Confirm-password" name="cpass"></br><br>
         </div>

         <!--Create new account-->
         <div class="button">
            <button type="submit" value="submit" name="submit">Create a new account</button>
         </div>

         <!--already have an account-->
         <div class="have-account">
            <ha>Already have an account <a href="login.php">log in?</a></ha>
         </div>

         <!--horizontal line-->
         <hr>

         <!--another details-->
         <div class="terms">
            <t>By clicking sign up you agree to the<a href="#"> Terms </a>& <a href="https://localhost/mypage/privacy.php">Privacy policy</a></t>
         </div>



   </div>
   </form>
   <script src=""></script>
</body>