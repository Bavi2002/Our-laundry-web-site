<?php

require_once(__DIR__ . "/config.php");

$id = $_GET['id'];
$query = "SELECT * FROM prices WHERE id='$id'";

$data = $conn->query($query);


$row = mysqli_fetch_array($data);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>price edit</title>
  <link rel="stylesheet" type="text/css" href="css/priceedit.css">
</head>

<body>


  <br><br>


  <form action="<?php echo BASEURL ?>/update_product.php?id=<?php echo $row['id']; ?>" method="POST">



    <center>
      <label for="fname" class="id">ID</label>
      <input type="text" id="fname" value="<?php echo $row['id'] ?>" readonly><br><br>


      <label for="fname" class="price">Price</label>
      <input type="text" id="fname" name="price" value="<?php echo $row['price'] ?>"><br><br>


      <label for="lname" class="type">Type</label>
      <input type="text" id="lname" name="type" value="<?php echo $row['type'] ?>"><br><br>


      <label for="lname" class="service">Service</label>
      <input type="text" id="lname" name="service" value="<?php echo $row['service'] ?>"><br><br>

    </center>


    <input type="submit" class="btn" value="Update">

  </form>



  <br><br><br>



  <br><br><br>
</body>

</html>