<!DOCTYPE html>
<?php

include "config.php";
if (isset($_POST['submit'])) {
  $did = $_POST['did'];
  $center = $_POST['center'];
  $cno = $_POST['cno'];
  $msge = $_POST['msge'];

  $sql = "INSERT INTO `feedback` (`CustomerId`, `PharmacyCenter`, `CardNo`, `Message`) VALUES ('$did', '$center', '$cno', '$msge');";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo '<script type="text/javascript">
      window.onload = function () { alert("Feedback Added !"); }
    </script>';
  } else {
    die(mysqli_error($conn));
  }
}

?>
<html>

<head>

  <title>
    Fresh Hub
  </title>

  <link rel="stylesheet" href="feedback-style.css">


</head>


<body>

  <header>
    <!-- METHANATA OYALAGE HEADER EK ADD KRNNA'''''''''''''''''''-->
  </header>

  <div class="fBack">

    <h1>Your Feedback</h1>
    <h3>We would like your feedback to improve our service.</h3>



    <form action="feedback.php" method="post">
      <label for="did">Customer ID: </label><br>
      <input type="text" id="did" name="did" size="50"><br><br>
      <label for="center">Laundry Location: </label><br>
      <input type="text" id="center" name="center" size="50"><br><br>
      <label for="cno">Customer Card Number: </label><br>
      <input type="text" id="cno" name="cno" size="50"><br><br><br>
      <p class="star">How would you rate your experience with our Fresh Hub's service?</p>
      <div class="rate">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="5">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="4">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="3">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="2">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="1">1 star</label><br><br>
      </div>
      <br><br><br><label for="msge">Any Messages:</label><br>
      <textarea id="msge" name="msge" rows="10" cols="82"></textarea><br><br>
      <div class="link">
        <button type="submit" name="submit">Submit</button>
        <a href="view_feedback.php">View Feedback</a>
      </div>


    </form>
    <br>
  </div>




  <footer>
    <!-- METHANATA OYALAGE FOOTER EK ADD KRNNA'''''''''''''''''''-->

  </footer>


</body>

</html>