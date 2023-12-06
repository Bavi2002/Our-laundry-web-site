<?php
include 'config.php';

if (isset($_GET['deleteid'])) {
   $userid = $_GET['deleteid'];

   $sql = "delete from users1 where id = $userid";
   $result = mysqli_query($conn, $sql);
   if ($result) {
      //echo "Deleted successfully";
      header('location:Display.php');
   } else {
      die(mysqli_error($conn));
}
}
?>