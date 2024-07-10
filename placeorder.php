<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Payment-Page</title>
    <link rel="stylesheet" href="CSS/placeorder.css">
</head>
<body>
    <!-- header section -->
    <nav class="navbar">
        <div class="logo-img">
            <img src="image/logo.png" alt="Cake House Logo">
            <i><h2><big><big><big>The Sweetest Slice</big></big></big></h2></i>
        </div>
        <div class="nav-menu hide">
            <a href="index.html"><big>Home</big></a>
            <a href="onlineorder.html"><big>Online Order</big></a>
            <a href="aboutshop.html"><big>About shop</big></a>
            <a href="contact.html"><big>Contact</big></a>
        </div>
    </nav>
    <div class="container">
        <form action="connection.php" method="post" id="placeorderform">

            <div class="row">
                <div class="col">
                    <h3 class="title">Billing Address</h3>

                    <div class="inputBox">
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                    </div>

                    <div class="inputBox">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" placeholder="Enter email address" required>
                    </div>

                    <div class="inputBox">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" placeholder="Enter address" required>
                    </div>

                    <div class="inputBox">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" placeholder="Enter city" required>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <label for="state">State:</label>
                            <input type="text" id="state" name="state" placeholder="Enter state" required>
                        </div>

                        <div class="inputBox">
                            <label for="zip">Zip Code:</label>
                            <input type="number" id="zip" name="zip" placeholder="123 456" required>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h3 class="title">Payment</h3>

                    <div class="inputBox">
                        <label for="name">Card Accepted:</label>
                        <img src="cards.png" alt="credit/debit card image">
                    </div>

                    <div class="inputBox">
                        <label for="cardName">Name On Card:</label>
                        <input type="text" id="cardName" name="cardName" placeholder="Enter card name" required>
                    </div>

                    <div class="inputBox">
                        <label for="cardNum">Credit Card Number:</label>
                        <input type="text" id="cardNum" name="cardNum" placeholder="1111-2222-3333-4444" maxlength="19" required>
                    </div>

                    <div class="inputBox">
                        <label for="expMonth">Exp Month:</label>
                        <select name="expMonth" id="expMonth">
                            <option value="">Choose month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <label for="expYear">Exp Year:</label>
                            <select name="expYear" id="expYear">
                                <option value="">Choose Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </div>

                        <div class="inputBox">
                            <label for="cvv">CVV</label>
                            <input type="number" id="cvv" name="cvv" placeholder="1234" required>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" onclick="submitForm()" class="submit_btn">
                Proceed to Checkout
            </button>
        </form>
    </div>
    <!-- footer section  -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3><big><big><big>About Us</big></big></big></h3>
                <p>Delicious Cakes is dedicated to bringing you the best homemade cakes for every occasion. Our cakes are made with love and the finest ingredients.</p>
            </div>
            <div class="footer-column">
                <h3><big><big><big>Quick Links</big></big></big></h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Online Order</a></li>
                    <li><a href="#">About shop</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3><big><big><big>Contact Us</big></big></big></h3>
                <ul>
                    <li>Email: amrishp192000.email.com</li>
                    <li>Phone: 9155500237</li>
                    <li>Address: 440023 Cake Street, Sweet Nagpur City, Maharashtra</li>
                </ul>
            </div>
        </div>
        <div class="footer-socials">
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-pinterest"></i> Pinterest</a>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Delicious Cakes. All rights reserved.</p>
        </div>
    </footer>

    <script type="text/javascript" src="index.js"></script>
    <?php include 'connection.php'; ?>
</body>
</html>
