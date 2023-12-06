<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="trackkorder.css">
    <title>Laundry Service Track Order</title>
</head>

<body>
    <header>

    </header>

    <main>
        <section class="trackordersection">
            <div class="banner">
                <img src="images/trackorder.jpg" alt="Track Order">
                <h1>Track Your Order</h1>
            </div>
        </section>

        <div class="track-order">
            <form>
                <label for="order-number">Enter Your Order Number</label>
                <input type="text" id="order-number" placeholder="Order Number">
                <button class="track-button">Track Order</button>
            </form>
        </div>

        <div class="step-wizard">
            <div class="step-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-name">Order placed</div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-name">Processing</div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-name">Dispatched</div>
                </div>
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-name">Delivered</div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="feedback">
            <h1>Feedback</h1>
            <form id="feedback-form">
                <p>Give Your Valuable Feedback</p>
                <a href="http://localhost/mypage/feedback.php" class="button-link">Submit</a>
            </form>
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>