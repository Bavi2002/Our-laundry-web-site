<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $countryCode = $_POST["countrycode"];
    $phoneNumber = $_POST["phonenumber"];
    $email = $_POST["youremail"];
    $message = $_POST["message"];

    // Process the form data here, e.g., save it to a database or send an email

    // For demonstration purposes, we'll just echo the received data
    echo "Form data received:<br>";
    echo "First Name: " . $fname . "<br>";
    echo "Last Name: " . $lname . "<br>";
    echo "Country Code: " . $countryCode . "<br>";
    echo "Phone Number: " . $phoneNumber . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message;
} else {
    echo "Invalid request method.";
}
?>
<!DOCTYPEhtml>
    <html>

    <head>
        <link rel="stylesheet" href="contact.css" type="text/css">
        <title>ONLINE LAUNDRY SERVICES</title>
    </head>

    <body>
        <h1 style-align="center"><u>Contact Us</u></h1>
        <hr color="black" border-top: 1px>
        <div class="main">
            <div>
                <form action="/action_page.php">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <br><br>
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br><br>

                    <br>
                    <label for="country code">Country code</label>
                    <select id="country code" name="country code">
                        <option value="Sri lanka">+94</option>
                        <option value="india">+91</option>
                        <option value="usa">+1</option>

                    </select>
                    <br>

                    <label for="phone">Phone number:</label>
                    <input type="phone" name="phonenumber" pattern="[0-9] {10}" placeholder="Phone number">

                    <br><br><br>
                    <label for="mail">Your E-mail</label>
                    <input type="text" id="mail" name="Your E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder="Enter Your E-mail"><br><br>
                    <br><br>
                    <label for="Message">Messege</label><br>
                    <textarea name="Messege" rows="8" cols="50" required></textarea></br><br><br>

                    <input type="checkbox" name="checkBox" onclick="enableButton()">I'm not a robot.

                    <br><br><br>

                    <input type="submit" value="Submit"><input type="submit" value="Cancel">




                </form>
            </div>
            <div>
                <p class="map"><b>Find Us</b><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31687.079365189216!2d79.94483255087711!3d6.904362812888492!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256d59601df81%3A0x31a1dd96e8d49ba!2sMalabe!5e0!3m2!1sen!2slk!4v1696996521978!5m2!1sen!2slk" width="400" height="300" style="border:0;" allowfullscreen="
 " loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p></br>
            </div>
        </div>
        </div>

        <div class="box">
            <ul>
                <li>Address:174/6,New Kandy Road,Malabe</li><br>
                <li>Contact Number:01127085512/012345678</li><br>
                <li>Email:someone@gmail.com</li>
            </ul>
        </div>

    </body>

    </html>