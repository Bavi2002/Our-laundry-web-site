<?php

include 'config.php';

session_start();
if (isset($_POST['submit'])) {

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));



   $select = mysqli_query($conn, "SELECT * FROM `users1` WHERE email = '$email' AND password = '$pass'") or die('query failed');


   if (mysqli_num_rows($select) > 0) {
      $row = mysqli_fetch_assoc($select);

      $_SESSION['PROFILE'] = $row['id'];
      $_SESSION['userIsLoggedIn'] = true;

      header('location:https://localhost/mypage/navbar.php');
   } else {
      $message[] = 'incorrect email or password!';
   }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Your Web Page</title>
   <link rel="stylesheet" href="logincss.css"> <!-- Link to your CSS file -->
   <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
</head>

<body>
   <div class="center-box">
      <h2>Login</h2>

      <form method="post"> <!-- Added method="post" to the form -->
         <input type="email" id="email" name="email" placeholder="Enter your E-mail" required>
         <input type="password" id="password" name="password" placeholder="Password" required>
         <button type="submit" name="submit">Login</button>

         <?php
         if (isset($message)) {
            foreach ($message as $message) {
               echo '<div class="message">' . $message . '</div>';
            }
         }
         ?>
         <!-- icons -->
         <div class="login-icons">
            <p>Login with</p>
            <div class="social-icons">
               <a href="https://web.facebook.com"><img src="images/fb3.png.jpg" alt="Facebook"></a>
               <a href="https://myaccount.google.com/"><img src="images/google123.png.jpg" alt="Google"></a>
               <a href="#"><img src="images/instagram123.png.jpg" alt="Instagram"></a>
            </div>
         </div>
         <!-- footer -->
         <footer class="foo">
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
         </footer>
      </form>

   </div>
</body>

</html>