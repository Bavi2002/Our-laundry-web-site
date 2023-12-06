<?php
include 'config.php';
session_start();

$user = $_SESSION['PROFILE'];
$message = array();
$result = mysqli_query($conn, "SELECT password FROM users1 WHERE id = '$user'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update_profile'])) {

   $update_fname = mysqli_real_escape_string($conn, $_POST['update_fname']);
   $update_lname = mysqli_real_escape_string($conn, $_POST['update_lname']);
   $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
   $update_address = mysqli_real_escape_string($conn, $_POST['update_address']);
   $update_contact = mysqli_real_escape_string($conn, $_POST['update_contact']);


   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, $_POST['update_pass']);
   $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
   $confirm_pass = mysqli_real_escape_string($conn, $_POST['confirm_pass']);



   mysqli_query($conn, "UPDATE `users1` SET fname = '$update_fname', lname = '$update_lname', email = '$update_email', address = '$update_address', contact = '$update_contact' WHERE id = '$user'") or die('query failed');
   if (!empty($update_pass)) {

      if ($old_pass == md5($update_pass)) {
         mysqli_query($conn, "UPDATE `users1` SET fname = '$update_fname', lname = '$update_lname', email = '$update_email', address = '$update_address', contact = '$update_contact' WHERE id = '$user'") or die('query failed');
         if ((!empty($new_pass) && !empty($confirm_pass))) {

            if ($new_pass == $confirm_pass) {
               $new = md5($new_pass);
               mysqli_query($conn, "UPDATE users1 SET password = '$new' WHERE id = '$user'");
               $message[] = 'Password updated successfully!';
            } else {
               $message[] = 'New password and confirmation do not match!';
            }
         }
      } else {
         $message[] = 'Old password is incorrect!';
      }
   }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Profile</title>
   <link rel="stylesheet" type="text/css" href="updateProfile.css">
</head>

<body>
   <?php
   $select = mysqli_query($conn, "SELECT * FROM `users1` WHERE id = '$user'") or die('query failed');
   if (mysqli_num_rows($select) > 0) {
      $row = mysqli_fetch_assoc($select);
   }
   ?>
   <div class="container">

      <div class="form-container">
         <h1>Update Your Profile</h1>
         <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
               <label for="update_fname"><b>Username:</b></label>
               <input type="text" name="update_fname" value="<?php echo $row['fname']; ?>" required>
            </div>
           
            <div class="form-group">
               <label for="update_lname"><b>Username:</b></label>
               <input type="text" name="update_lname" value="<?php echo $row['lname']; ?>" required>
            </div>


            <div class="form-group">
               <label for="update_email"><b>Your Email:</b></label>
               <input type="email" name="update_email" value="<?php echo $row['email']; ?>" required>
            </div>

            <div class="form-group">
               <label for="update_contact"><b>Your Contact Number:</b></label>
               <input type="text" name="update_contact" value="<?php echo $row['contact']; ?>" required>
            </div>

            <div class="form-group">
               <label for="update_address"><b>Your Address:</b></label>
               <input type="text" name="update_address" value="<?php echo $row['address']; ?>" required>
            </div>

            <div class="form-group">
               <input type="hidden" name="old_pass" value="<?php echo $row['password']; ?>">
               <label><b>old password :</b></label>
               <input type="password" name="update_pass" placeholder="enter previous password">
            </div>

            <div class="form-group">
               <label for="new_pass"><b>New Password:</b></label>
               <input type="password" name="new_pass" placeholder="Enter new password">
            </div>

            <div class="form-group">
               <label for="confirm_pass"><b>Confirm New Password:</b></label>
               <input type="password" name="confirm_pass" placeholder="Confirm new password">
            </div>

            <input type="submit" value="Update Profile" name="update_profile" class="btn">
            <a href="profile.php" class="delete-btn">Go back to Profile</a>



         </form>

         <div class="message">
            <?php
            foreach ($message as $msg) {
               echo $msg . "<br>";
            }
            ?>
         </div>
      </div>
      </form>
   </div>
   </div>
</body>

</html>