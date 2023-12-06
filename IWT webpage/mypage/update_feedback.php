<?php

include_once 'footer2.php'; //meka ayin krnn epa
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Feedback</title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>
    <div class="background">
        <div class="fBack">
            <h1>Update Feedback</h1>
            <?php
            // Include the database connection file
            include "config.php";

            // Check if the feedback ID is provided
            if (isset($_GET['id'])) {
                $feedbackId = $_GET['id'];

                // Fetch the feedback details from the database
                $query = "SELECT * FROM feedback WHERE FeedbackId = '$feedbackId';";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $feedback = mysqli_fetch_assoc($result);
                    $customerId = $feedback['CustomerId'];
                    $pharmacyCenter = $feedback['PharmacyCenter'];
                    $cardNo = $feedback['CardNo'];
                    $message = $feedback['Message'];
            ?>

                    <form action="update_feedback.php" method="post">
                        <input type="hidden" name="feedback_id" value="<?php echo $feedbackId; ?>">
                        <label for="customerId">Customer Id:</label><br>
                        <input type="text" id="customerId" name="customerId" size="50" value="<?php echo $customerId; ?>" required><br><br>
                        <label for="pharmacyCenter">Laundry Center:</label><br>
                        <input type="text" id="pharmacyCenter" name="pharmacyCenter" size="50" value="<?php echo $pharmacyCenter; ?>" required><br><br>
                        <label for="cardNo">Card Number:</label><br>
                        <input type="text" id="cardNo" name="cardNo" size="50" value="<?php echo $cardNo; ?>" required><br><br>

                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message" rows="10" cols="82" required><?php echo $message; ?></textarea><br><br>

                        <br><br>
                        <button type="submit" name="submit">Update</button>
                    </form>
            <?php
                } else {
                    // Feedback not found
                }
            } else {
                // Feedback ID not provided
            }

            // Handle feedback update
            if (isset($_POST['submit'])) {
                $feedbackId = $_POST['feedback_id'];
                $customerId = $_POST['customerId'];
                $pharmacyCenter = $_POST['pharmacyCenter'];
                $cardNo = $_POST['cardNo'];
                $message = $_POST['message'];

                $updateQuery = "UPDATE feedback SET CustomerId='$customerId', PharmacyCenter='$pharmacyCenter', CardNo='$cardNo', Message='$message' WHERE FeedbackId='$feedbackId';";
                $updateResult = mysqli_query($conn, $updateQuery);

                if ($updateResult) {
                    echo '<script type="text/javascript">
                        window.onload = function () { 
                            alert("Feedback updated successfully!"); 
                            window.location.href = "view_feedback.php";
                        }
                    </script>';
                } else {
                    die(mysqli_error($conn));
                }
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>

</html>