<?php

include 'config.php';
session_start();

$userIsLoggedIn = isset($_SESSION['userIsLoggedIn']) && $_SESSION['userIsLoggedIn'];
// $user = $_SESSION['userIsLoggedIn'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>navbar</title>
  <link rel="stylesheet" href="homestyle.css" />
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
</head>

<body>
  <div class="full">
    <header>
      <a class="logo" href="https://localhost/mypage/navbar.php"> <span>Fresh Hub</span></a>
      <nav>
        <ul class="nav_link">
          <li><a class="navii" href="#">Home</a></li>
          <li>
            <a class="navii" href="https://localhost/mypage/product_view.php">Service</a>
          </li>
          <li>
            <a class="navii" href="https://localhost/mypage/contact.php">Contact Us</a>
          </li>
          <li>
            <a class="navii" href="https://localhost/mypage/aboutus.php">About Us</a>
          </li>
          <li>
            <a class="navii" href="https://localhost/mypage/profile.php">My Account</a>
          </li>
          <li>
            <a href="https://localhost/mypage/register.php"><button class="nav_btn">Register</button></a>
          </li>
        </ul>
      </nav>
    </header>
    <div class="intro">
      <h1>Get your laundry & dry-cleaning within 24 hours</h1>
      <p>
        Experience the ultimate convenience in laundry services with our
        user-friendly web platform.
      </p>
      <a href="https://localhost/mypage/product_view.php">
        <button id="navigateButton">Get Started</button></a>
    </div>
  </div>
  <div id="section2">
    <div class="slide">
      <img class="img1" src="Images/laundry-service-transformed.jpeg" />
      <img class="img1" src="Images/beautiful-composition-spa-bath-concept_23-2148094116.webp" />
      <img class="img1" src="Images/service2.jpg" />
      <img class="img1" src="Images/service3.jpg" />
      <img class="img1" src="Images/stack-dirty-clothes-wooden-table-ai-generated_145713-8042.jpg" />
    </div>
    <div class="ser">
      <h1>Our Services</h1>
      <div class="imgsent">
        <img src="Images/wash.webp" />
        <p>
          <span>Wash & Dry </span><br />Our Wash and Dry service is the
          epitome of convenience, making laundry day hassle-free and leaving
          you with more time to enjoy the things you love.
        </p>
        <br />
      </div>
      <div class="imgsent">
        <img src="Images/fooool.jpg" />
        <p>
          <span>Iron & Fold</span><br />Our Iron and Fold Laundry Service
          offers a convenient and hassle-free solution to one of life's
          never-ending chores: laundry
        </p>
        <br />
      </div>
      <div class="imgsent">
        <img src="Images/stein.jpg" />
        <p>
          <span>Stein Removal</span><br />Our stain removal laundry service is
          your solution to stubborn stains that seem impossible to tackle at
          home.
        </p>
        <br />
      </div>
      <div class="imgsent">
        <img src="Images/delivery.jpg" />
        <p>
          <span>Pickup & Delivery</span><br />
          We offer a seamless pickup and delivery experience. No need to worry
          about lugging heavy bags of laundry to and from the laundromat.
        </p>
        <br />
        <a href="https://localhost/mypage/product_view.php">
          <button class="servbtn">View All Services</button></a>
      </div>
      <div class="imgsent">
        <span></span>
      </div>
    </div>
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
              <li><a href="#">Home</a></li>
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
<script>
  const images = document.querySelectorAll(".slide img");
  let currentIndex = 0;

  function showImage(index) {
    images.forEach((image) => (image.style.opacity = 0));

    images[index].style.opacity = 1;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
  }

  showImage(currentIndex);

  setInterval(nextSlide, 3000);

  const userIsLoggedIn = <?php echo (isset($_SESSION['userIsLoggedIn']) && $_SESSION['userIsLoggedIn']) ? 'true' : 'false'; ?>;;


  const navigateButton = document.getElementById('navigateButton');


  navigateButton.addEventListener('click', () => {
    if (userIsLoggedIn) {

      window.location.href = 'https://localhost/mypage/product_view.php';
    } else {
      window.location.href = 'https://localhost/mypage/login.php';
    }
  });
</script>