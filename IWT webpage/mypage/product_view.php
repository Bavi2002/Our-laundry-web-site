<?php

include 'config.php';

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
  <link rel="stylesheet" type="text/css" href="productview.css">
</head>

<body>
  <div class="full">
    <header>
      <a class="logo" href="https://localhost/mypage/navbar.php"> <span>Fresh Hub</span></a>
      <nav>
        <ul class="nav_link">
          <li><a class="navii" href="https://localhost/mypage/navbar.php">Home</a></li>
          <li>
            <a class="navii" href="#">Service</a>
          </li>
          <li>
            <a class="navii" href="https://localhost/mypage/contact.php">Contact Us</a>
          </li>
          <li>
            <a class="navii" href="https://localhost\mypage\aboutus.php">About Us</a>
          </li>
          <li>
            <a class="navii" href="https://localhost\mypage\profile.php">My Account</a>
          </li>
          <li>
            <a href="https://localhost/mypage/register.php"><button class="nav_btn">Register</button></a>
          </li>
        </ul>
      </nav>
    </header>
    <br><br>

    <div class="container">
      <center>
        <table>
          <tr>
            <th>Price</th>
            <th>Type</th>
            <th>Service</th>
          </tr>
          <?php
          while ($row = mysqli_fetch_array($data)) {
          ?>
            <tr>
              <td>Rs<?php echo $row['price'] ?>/=</td>
              <td><?php echo $row['type'] ?></td>
              <td><?php echo $row['service'] ?></td>
            </tr>


          <?php
          } ?>
        </table><br>
        <a href="https://localhost/mypage/pay.php"><button class="custom-button">Submit</button></a>

      </center>
    </div>
    <div class="section3">
      <footer>
        <div class="row">
          <div class="col">
            <div class="para">
              <h1 class="logo1">Fresh Hub</h1>
              <p>
                Laundry services provide a convenient solution for individuals
                and businesses to wash, dry, and fold their clothing and linens.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="office">
              <h2>Office</h2>
              <h4>Main Branch:</h4>
              <p>New Kandy road, Malabe Colombo, Srilanka.</p>
              <span class="email-id">abcd@gmail.com</span>
              <h3>+94 076543210</h3>
            </div>
          </div>
          <div class="col">
            <div class="links">
              <h2>Links</h2>
              <ul>
                <li><a href="https://localhost/mypage/navbar.php">Home</a></li>
                <li>
                  <a href="https://localhost/mypage/profile.php">My Account</a>
                </li>
                <li>
                  <a href="https://localhost/mypage/faq.php">FAQ's</a>
                </li>
                <li>
                  <a href="https://localhost/mypage/privacy.php">Privacy policy</a>
                </li>
                <li>
                  <a href="https://localhost/mypage/terms.php">Terms and Condition</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col">
            <div class="socialicons">
              <h2>Follow Us</h2>
              <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://twitter.com/home"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-google-plus"></i></a>
            </div>

          </div>
        </div>
      </footer>
    </div>
</body>

</html>