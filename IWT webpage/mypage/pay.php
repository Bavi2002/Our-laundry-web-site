<?php
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="http://kit.fontawesome.com/e8fa2e31b4.js"></script>
    <link rel="stylesheet" href="pay.css">
</head>

<body>
    <!-- This is FULL CONTAINER-->
    <div class="container">

        <!-- This is LEFT SIDE-->
        <div class="left">
            <!-- heading -->
            <p>Payment methods</p>

            <!-- horizontal line -->
            <hr style="border: 1px solid #ccc; margin: 0 15px;">

            <!-- There are 3 methods -->
            <div class="methods">
                <!-- Payment card -->
                <div style="color:greenyellow;">
                    <i class="fa-solid fa-credit-card" style="color: greenyellow;"></i>Payment by card
                </div>

                <!-- Internet banks -->
                <div id="tColorB">
                    <i class="fa-solid fa-building-columns">Internet banks</i>
                </div>

                <!-- Google pay -->
                <div id="tColorC">
                    <i class="fa-solid fa-wallet">Google pay</i>
                </div>

                <!-- horizontal line -->
                <hr style="border: 1px solid #ccc;margin: 0 15px;">
            </div>
        </div>

        <!-- this is CENTER OF THE container -->
        <div class="center">

            <!-- adding logos -->
            <a href="#">
                <img alt="Credit crd Logos" title="Credit card Logos" src="http://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="250" height="auto/">
            </a>

            <!-- horizontal line -->
            <hr style="border: 1px solid #ccc; margin: 0 15px;">

            <!-- form started  -->
            <div class="card-details">
                <form>
                    <!-- Card number -->
                    <p>Card number</p>
                    <div class="c-number" id=c-number>
                        <input id="number" class="cc-number" placeholder="Card number" maxlength="19" autocomplete="off" required>
                        <i class="fa-solid fa-credit-card" style="margin: 0;"></i>
                    </div>

                    <!-- Card details -->
                    <div class="c-details">
                        <div>
                            <p>Expiry date</p>
                            <input id="e-date" class="cc-exp" placeholder="MM/YY" required maxlength="5" autocomplete="off" required>
                        </div>

                        <!-- CVV box -->
                        <div>
                            <p>CVV</p>
                            <div class="cvv-box" id="cvv-box">
                                <input id="cvv" class="cc-cvv" placeholder="CVV" required maxlength="3" autocomplete="off" required>
                                <i class="fa-solid fa-circle-question" title="3 digits on the back of the card" style="cursor: pointer;"></i>
                            </div>
                        </div>

                    </div>

                    <!-- Email -->
                    <div class="email">
                        <p>Email</p>
                        <input type="email" placeholder="example@email.com" id="email" autocomplete="off" required>
                    </div>

                    <!-- pay button -->

                    <a href="http://localhost/mypage/trackkorder.php" name="submit" class="button-link">Pay now</a>
                </form>
            </div>
        </div>

        <!-- This is RIGHT SIDE-->
        <div class="right">

            <!-- Order information -->
            <p>Order information</p>

            <div class="order-summary">
                <ul>
                    <!-- Add service names and amounts dynamically here -->
                    <li>Washing - LKR 800.00</li>
                    <li>Drying - LKR 500.00</li>
                    <li>Ironing - LKR 700.00</li>
                    <!-- You can replace these with your actual services and amounts -->
                </ul>
                <p id="total-amount">Total Amount: LKR 0.00</p> <!-- Added this line for total amount -->
            </div>


            <!-- horizontal line -->
            <hr style="border: 1px solid #ccc; margin: 015px;">

            <!-- Order description -->
            <div class="details">
                <div style="font-weight: bold; padding:3px 0;">Order discription</div>
                <div style="padding: 3px 0;">Test payment</div>
            </div>

            <!-- horizontal line -->
            <hr style="border:1px solid #ccc; margin: 0 15px;">

            <!-- adding logos -->
            <a href="#">
                <img alt="Credit Card Logos" title="Credit Card Logos" src="https://www.shift4shop.com/images/credit-card-logos/cc-lg-4.png" width="100%" height="100%">
            </a>
        </div>
    </div>

    <!-- Connect javascript -->

    <script>
        //card number box

        document.addEventListener('DOMContentLoaded', function() {
            let cNumber = document.getElementById('number');

            if (cNumber) {
                cNumber.addEventListener('keyup', function(e) {
                    let num = cNumber.value;

                    let newValue = '';
                    num = num.replace(/\s/g, '');

                    for (var i = 0; i < num.length; i++) {
                        if (i % 4 == 0 && i > 0) newValue = newValue.concat(' ')
                        newValue = newValue.concat(num[i]);
                        cNumber.value = newValue;
                    }

                    let ccNum = document.getElementById('c-number');
                    if (num.length < 16) {
                        ccNum.style.border = "1px solid red";
                    } else {
                        ccNum.style.border = "1px solid greenyellow";
                    }
                });
            } else {
                console.error('Element with id "number" not found in the DOM.');
            }
        });

        //date box

        let eDate = document.getElementById('e-date');
        eDate.addEventListener('keyup', function(e) {
            let newInput = eDate.value;

            if (e.which !== 8) {
                var numChars = e.target.value.length;
                if (numChars == 2) {
                    var thisVal = e.target.value;
                    thisVal += '/';
                    e.target.value = thisVal;
                    console.log(thisVal.length)
                }
            }

            if (newInput.length < 5) {
                eDate.style.border = "1px solid red";
            } else {
                eDate.style.border = "1px solid greenyellow";
            }


        })

        //CVV number box

        let cvv = document.getElementById('cvv');
        cvv.addEventListener('keyup', function(e) {

            let elen = cvv.value;
            let cvvBox = document.getElementById('cvv-box');
            if (elen.length < 3) {
                cvvBox.style.border = "1px solid red";
            } else {
                cvvBox.style.border = "1px solid greenyellow";
            }
        })


        // Function to calculate the total amount
        function calculateTotal() {
            var serviceItems = document.querySelectorAll(".order-summary li"); // Select by class
            var totalAmount = 0;

            serviceItems.forEach(function(item) {
                var amountText = item.textContent.split(' - LKR ')[1]; // Assuming the format is "Service Name - Amount"
                var amount = parseFloat(amountText.trim());
                totalAmount += amount;
            });

            return totalAmount;
        }

        // Update the total amount in the HTML
        var totalElement = document.getElementById("total-amount"); // Get the total element by ID
        totalElement.textContent = "Total Amount: LKR " + calculateTotal().toFixed(2); // Update the content with two decimal places and LKR symbol
    </script>
</body>

</html>