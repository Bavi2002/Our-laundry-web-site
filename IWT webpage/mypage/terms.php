<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Check if the "agree" checkbox is checked
//     if (isset($_POST["agree"])) {
//         // The user has agreed to the terms and conditions
//         // You can perform any necessary actions here, such as storing the user's acceptance in a database.

//         // For example, you can save the acceptance in a database:
//         // $userAccepted = true; // Set this to true for the user who accepted the terms
//         // Save $userAccepted in your database

//         // Redirect the user to a thank you page or any other appropriate page
//         header("Location: thank_you.php");
//         exit;
//     } else {
//         // The user did not agree to the terms and conditions
//         // You can display an error message or take appropriate action.
//         echo "You must agree to the terms and conditions to proceed.";
//     }
// } else {
//     // Redirect the user to the form page if they haven't submitted the form.
//     header("Location:https://localhost/mypage/terms.php");
//     exit;
// }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Online Laundry Service</title>
    <link rel="stylesheet" href="css/terms.css">
</head>

<body>


    <h1><u>Terms and conditions</u></h1>
    <hr>
    <div class="container">
        <h2>Terms for Wash-and-Fold Laundry</h2>

        <h3><u>Cleanliness and Launderability</u></h3>
        <p><b>By using our service, you acknowledge that your clothing can be washed in water on a regular cycle and dried in a tumble dryer with heat. Any harm to clothing that cannot be laundered using this standard procedure is not our responsibility. Also, we have the right to decline to service products that pose a risk to our employees, such as those that are excessively unclean with human or animal excrement. This is for our team's health and safety.</b></p><br>

        <h3><u>Laundry damage</u></h3>
        <p><b>We'll take every precaution to protect your clothing. We are unfortunately limited in what we can do. For instance, we are unable to examine your pockets to determine whether you have left any items inside. As a result, we are not liable if something found in your clothes causes harm. Moreover, we can't promise that we will discover or return anything if you phone and say you left your favorite bracelet—or anything else—in your pocket.<br><br>Regardless of how delicate the technique, all laundry causes typical wear and strain on garments. As a result, we are not liable for any washing damage, such as button loss, fading, wrinkling, holes, or abrasions.</b></p><br>

        <h3><u>Missing laundry</u></h3>
        <p><b>We would adore being able to count each item of laundry you send us. Unfortunately, doing so would be too expensive for us. We just don't have a reliable means of confirming that we actually received any specific item of laundry in the first place, thus we can't be held liable for any missing laundry. But keep in mind that we closely track your clothing.</b></p><br>

        <h3><u>Dry cleaning process and terms</u></h3>
        <p><b>Our Laundry service by will inventory all dry-cleaning items once they arrive at the facility to be cleaned. This inventory is final, and we will track your items carefully to return them to you. However, in the event of loss or damage of dry-cleaned items, we will reimburse you up to 10 times the charge per article. Should you find an issue with one of your pieces, please notify us within 24 hours of your delivery.</b></p>

    </div>

    <div class="background"></div>

    <form action="navbar.php" method="post">
        <label for="agree"> <b>I agree to the terms and conditions:</b></label>
        <input type="checkbox" id="agree" name="agree" required>
        <button type="submit">Accept</button>
    </form>
    <script src="script.js"></script>
</body>

</html>