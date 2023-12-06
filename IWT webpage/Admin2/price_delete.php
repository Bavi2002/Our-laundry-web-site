<?php



require_once(__DIR__ . "/config.php");

$id = $_GET['id'];
$query = "SELECT * FROM prices WHERE  id='$id'";

$data = $conn->query($query);
$row = mysqli_fetch_array($data);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Product</title>
  <link rel="stylesheet" type="text/css" href="css/pricedel.css">
</head>

<body>
  <div class="container">
    <form action="<?php echo BASEURL ?>/delete_product.php?id=<?php echo $row['id']; ?>" method="POST" class="delete-form">
      <center>
        <label for="id" class="id">ID</label>
        <input type="text" id="id" value="<?php echo $row['id'] ?>" readonly><br><br>

        <label for="price" class="price">Price</label>
        <input type="text" id="price" name="price" readonly value="<?php echo $row['price'] ?>"><br><br>

        <label for="type" class="type">Type</label>
        <input type="text" id="type" name="type" readonly value="<?php echo $row['type'] ?>"><br><br>

        <label for="service" class="service">Service</label>
        <input type="text" id="service" name="service" readonly value="<?php echo $row['service'] ?>"><br><br>
      </center>
      <input type="submit" class="btn delete-btn" value="Delete">
    </form>
  </div>
</body>

</html>