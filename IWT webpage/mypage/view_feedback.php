<?php

?>
<!DOCTYPE html>
<html>

<head>
    <title>View Feedback</title>
    <link rel="stylesheet" href="vf-style.css">


</head>

<body>


    <div class="feedbackcontainer">
        <h1>Feedback</h1>
        <?php

        include "config.php";


        $sql = "SELECT * FROM feedback";
        $result = mysqli_query($conn, $sql);


        if (mysqli_num_rows($result) > 0) {

            echo '<table border =2>
                <tr>
                    <th>Feedback ID</th>
                    <th> Customer ID</th>
                    <th>Laundry Location</th>
                    <th>Customer Card Number</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                    <td>' . $row['FeedbackId'] . '</td>
                    <td>' . $row['CustomerId'] . '</td>
                    <td>' . $row['PharmacyCenter'] . '</td>
                    <td>' . $row['CardNo'] . '</td>
                    <td>' . $row['Message'] . '</td>
                    <td><a href="delete_feedback.php?id=' . $row['FeedbackId'] . '">Delete</a>
                        <a href="update_feedback.php?id=' . $row['FeedbackId'] . '">Update</a>
                        
                    </td>
                </tr>';
            }
            echo '</table>';
        } else {
            echo 'No feedback records found.';
        }


        mysqli_close($conn);
        ?>
    </div>

</body>

</html>