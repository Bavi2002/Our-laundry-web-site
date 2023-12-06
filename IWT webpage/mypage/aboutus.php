<?php
include 'config.php';

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
  <link rel="stylesheet" type="text/css" href="aboutus.css">
</head>

<body>
  <div class="full">
    <header>
      <a class="logo" href="https://localhost/mypage/navbar.php"> <span>Fresh Hub</span></a>
      <nav>
        <ul class="nav_link">
          <li><a class="navii" href="https://localhost/mypage/navbar.php">Home</a></li>
          <li>
            <a class="navii" href="https://localhost\mypage\product_view.php">Service</a>
          </li>
          <li>
            <a class="navii" href="https://localhost/mypage/contact.php">Contact Us</a>
          </li>
          <li>
            <a class="navii" href="#p">About Us</a>
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

    <body>
      <div class="container">
        <div class="text">
          <h2>Welcome to Fresh Hub, where we redefine convenience and freshness in the world of laundry services</h2>
          <p> At Fresh Hub, we are committed to providing you with top-notch laundry services that save you time and energy. We believe that clean and fresh clothes should be accessible to everyone, and we take pride in delivering quality results every time.Thank you for choosing Online Laundry. We look forward to serving you and making laundry day a breeze.</p>
          <br>
          <h2>Why Choose Us?</h2>
          Convenience,
          Quality,
          Reliability and
          Transparency<br>
          <p>We invite you to experience the future of laundry services with <b>Fresh Hub</b>. Say goodbye to the hassles and embrace a more convenient, efficient, and eco-friendly approach to laundry.
          </p>
        </div>
        <div class="image">
          <div id="grad1"></div>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <div class="w3-container">
            <img src="images/laundry2.png" class="w3-round-xxlarge transparent-image" alt="Laundry image" style="width:100%; height: auto; float:right;">
          </div>
        </div>
      </div>
    </body>
    <style>
      /* Apply styles to the container */
      .container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
      }

      /* Apply styles to the text content */
      .text {
        flex: 1;
        padding: 20px;
        text-align: left;
      }

      .text h2 {
        font-size: 24px;
        color: #333;
      }

      .text p {
        font-size: 16px;
        color: #666;
      }

      .text h2:after {
        content: "";
        display: block;
        width: 40px;
        height: 2px;
        background: #007BFF;
        margin: 10px 0;
      }

      /* Apply styles to the image */
      .image {
        flex: 1;
        padding: 20px;
      }

      .image img {
        max-width: 400px;
        max-height: 400px;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
    </style>

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
                <li><a href="https://localhost/mypage/navbar.html">Home</a></li>
                <li>
                  <a href="https://localhost/mypage/profile.php">My Account</a>
                </li>
                <li>
                  <a href="https://www.google.com/search?q=faq+page&sca_esv=571229774&sxsrf=AM9HkKktOsm0dS6oVRq0ZEyIHHSCNPCgDQ%3A1696580876468&ei=DMUfZfeGHPycseMPif676Ak&oq=faq&gs_lp=Egxnd3Mtd2l6LXNlcnAaAhgCIgNmYXEqAggDMgQQIxgnMgcQIxiKBRgnMgcQIxiKBRgnMgcQABiKBRhDMgsQABiKBRixAxiRAjIHEAAYigUYQzIHEAAYigUYQzIFEAAYgAQyBRAAGIAEMgUQABiABEjvIVAAWMMKcAF4AZABAJgBmgagAd0NqgEJMy0xLjAuMS4xuAEByAEA-AEBqAIUwgIHECMY6gIYJ8ICExAAGIoFGOoCGLQCGEMYiwPYAQHCAh8QLhgDGI8BGOUCGOoCGLQCGIwDGIsDGKgDGJkD2AECwgIZEAAYAxiPARjlAhjqAhi0AhiMAxiLA9gBAsICHxAuGAMYjwEY5QIY6gIYtAIYjAMYiwMYqAMYmgPYAQLCAiIQLhgDGI8BGOUCGOoCGLQCGIwDGIsDGKgDGJoDGJsD2AECwgIfEC4YAxiPARjlAhjqAhi0AhiMAxiLAxioAxibA9gBAsICExAuGIoFGLEDGIMBGMcBGNEDGEPCAg0QABiKBRixAxiDARhDwgINEC4YxwEY0QMYigUYJ8ICCBAAGIoFGJECwgIaEC4YxwEY0QMYigUYlwUY3AQY3gQY4ATYAQPiAwQYACBBiAYBugYGCAEQARgBugYGCAIQARgLugYGCAMQARgU&sclient=gws-wiz-serp">FAQ's</a>
                </li>
                <li>
                  <a href="https://localhost/mypage/privacy.php">Privacy policy</a>
                </li>
                <li>
                  <a href="https://www.google.com/search?q=terms+and+conditions&sca_esv=571229774&sxsrf=AM9HkKlnWmdyqToZZe7x9UhiF7PoV1HVTg%3A1696580937354&ei=ScUfZa6aFdz2seMPk_S3MA&oq=terms&gs_lp=Egxnd3Mtd2l6LXNlcnAaAhgCIgV0ZXJtcyoCCAEyBBAjGCcyDRAAGIoFGLEDGIMBGEMyBxAAGIoFGEMyBxAAGIoFGEMyBxAAGIoFGEMyBxAAGIoFGEMyBxAAGIoFGEMyBxAAGIoFGEMyBRAAGIAEMgoQABiABBgUGIcCSL2aAVDOe1j5iQFwAXgCkAEAmAHtAqAB_AqqAQUyLTMuMrgBAcgBAPgBAagCFMICBBAAGEfCAgcQIxjqAhgnwgIQEAAYigUY6gIYtAIYQ9gBAcICExAAGIoFGOoCGLQCGEMYiwPYAQHCAhkQLhiKBRjqAhi0AhhDGIsDGKgDGJwD2AEBwgIHECMYigUYJ8ICCxAAGIoFGLEDGIMBwgILEC4YgAQYsQMYgwHCAggQLhiABBixA-IDBBgAIEGIBgGQBgi6BgYIARABGAE&sclient=gws-wiz-serp">Terms and Condition</a>
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
              <a href="https://www.youtube.com/watch?v=HwzzGvKc3c0&list=RDN7SQrfX4DdM&index=12&ab_channel=ThinkTapes"><i class="fa-brands fa-google-plus"></i></a>
            </div>

          </div>
        </div>
      </footer>
    </div>
</body>

</html>