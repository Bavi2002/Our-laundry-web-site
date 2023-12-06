<?php

require_once(__DIR__ . "/config.php");

$query = "SELECT * FROM prices";

$data = $conn->query($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Roboto+Slab&display=swap" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div class="full">
    <header>
      <a class="logo" href="https://localhost/Admin2/index.php"> <span>Fresh Hub</span></a>
      <nav>
        <ul class="nav_link">
          <li><a class="navii" href="https://localhost/Admin2/index.php">Home</a></li>
          <li>
            <a class="navii" href="#">Service</a>
          </li>
          <li>
            <a class="navii" href="#">Contact Us</a>
          </li>
          <li>
            <a class="navii" href="#">About Us</a>
          </li>
          <li>
             <a href="#"><button class="nav_btn">Register</button></a >
          </li>
        </ul>
      </nav>
    </header>
<br><br>



<form action="/Admin2/process_product.php" method="POST" class="form">
  <center>
    <label for="price" class="name">Price</label>
    <input type="text" id="price" name="price" placeholder="Enter price.."><br><br>

    <label for="type" class="type">Type</label>
    <input type="text" id="type" name ="type" placeholder="Enter Product.."><br><br>

    <label for="service">Service</label>
    <input type="text" id="service" name="service" placeholder="Enter service.."><br><br>
  </center>
  <input type="submit" class="btn" value="Submit">
</form>

    <br><br><br>

    <center>
      <table>
        <tr>
          <th>Price</th>
          <th>Type</th>
          <th>Service</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td>Rs<?php echo $row['price'] ?>/=</td>
          <td><?php echo $row['type'] ?></td>
          <td><?php echo $row['service'] ?></td>
          <td><a class="update-link" href="<?php echo BASEURL . '/price_edit.php?id='.$row['id'] ?>">Update</a></td>
          <td><a class="delete-link" href="<?php echo BASEURL . '/price_delete.php?id='.$row['id'] ?>">Delete</a></td>
        </tr>
        <?php
        }?>
      </table>
    </center>
    <br><br><br>
  </div>
</body>
</html>


<br><br><br>

</body>
</html>


