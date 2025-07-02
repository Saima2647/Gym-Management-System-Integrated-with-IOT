<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoldGym</title>
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #add8e6; /* Light blue background */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            font-family: Arial, sans-serif; /* Specify font family */
            display: flex; /* Use flexbox to align items */
            align-items: center; /* Center items vertically */
            justify-content: center; /* Center items horizontally */
            flex-direction: column; /* Align items vertically */
        }

        header {
            background-color: #add8e6; /* Blue header */
            color: #0c64e8; /* White text color */
            padding: 20px; /* Add padding to the header */
            text-align: center; /* Center align text */
            width: 100%; /* Make header span full width */
            box-sizing: border-box; /* Include padding and border in width */
            border-bottom: 15px solid #ffffff;
            
        }

        .content {
            background-color: #add8e6; /* White background */
            width: 100%; /* Make container span full width */
            border-bottom: 15px solid #ffffff;
        }

        .container {
            display: flex; /* Use flexbox for layout */
            max-width: 800px; /* Set maximum width for content */
            margin: 20px; /* Add margin around content */
        }

        img {
            max-width: 50%; /* Set image width to half of container */
            height: auto; /* Maintain aspect ratio */
            border: 6px solid #0c64e8; /* Add border to image */
            border-radius: 8px; /* Add border radius */
        }

        .text {
            max-width: 50%; /* Set text width to half of container */
            padding: 0 20px; /* Add padding around text */
            box-sizing: border-box; /* Include padding and border in width */
            text-align: justify; /* Align text to justify */
        }

        h1, h2, p {
            margin-top: 0; /* Remove default top margin */
            margin-bottom: 10px; /* Add space between elements */
        }

        p:last-child {
            margin-bottom: 0; /* Remove margin for last paragraph */
        }

        footer {
            background-color: #add8e6; /* Light blue footer background */
            color: #000000; /* White text color */
            padding: 20px 0; /* Add padding to the footer */
            width: 100%; /* Make footer span full width */
            text-align: center; /* Center align text */
        }

        .container {
            display: flex; /* Use flexbox for layout */
            justify-content: space-between; /* Space items evenly */
            max-width: 800px; /* Set maximum width for content */
            margin: 0 auto; /* Center align container */
            padding: 0 20px; /* Add padding to container */
            box-sizing: border-box; /* Include padding and border in width */
        }

        .footer-content {
            flex: 1; /* Allow content to grow */
            text-align: left; /* Align text to the left */
        }

        .social-icons {
            list-style-type: none; /* Remove bullet points */
            padding: 0; /* Remove default padding */
            margin: 10px 0; /* Add margin */
        }

        .social-icons li {
            display: inline-block; /* Display icons horizontally */
            margin-right: 10px; /* Add space between icons */
        }

        .social-icons li:last-child {
            margin-right: 0; /* Remove margin for last icon */
        }

        .social-icons a {
            color: #ffffff; /* White icon color */
            font-size: 20px; /* Icon size */
            text-decoration: none; /* Remove underline */
        }

        .bottom-bar {
            background-color: #083b66; /* Dark blue background */
            padding: 10px 0; /* Add padding to the bottom bar */
            text-align: center; /* Center align text */
        }

        .bottom-bar p {
            margin: 0; /* Remove default margin */
            color: #ffffff; /* White text color */
        }
    </style>
</head>
<body>
    <header>
        <h1>Heart Rate Tracking</h1>
    </header>
    <div class="content">
        <div class="container">
            <img src="images/heart.jpg" alt="India's First Smart Gym">
            <div class="text">
                <p>
                    Live Heart Rate Tracking is one of the innovative features offered by GoldGym. With our cutting-edge technology, we provide real-time heart rate monitoring during your workouts. This allows you to optimize your training intensity and track your progress accurately.
                </p>
                <p>
                    Our advanced heart rate tracking system ensures precise measurement and analysis, helping you achieve your fitness goals efficiently. Whether you're a beginner or an experienced athlete, our Live Heart Rate Tracking feature will enhance your workout experience and maximize your results.
                </p>
                <p>
                    Experience the future of fitness with GoldGym and take your training to the next level with Live Heart Rate Tracking.
                </p>
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email: goldgym@gmail.com</p>
                <p>Phone: 01149970000</p>
                <p>Address: New Delhi</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                <ul class="list">
                    <li><a href="index.php" target="_blank">Home</a></li>
                    <li><a href="gallery.php" target="_blank">Event and Gallery</a></li>
                    <li><a href="pricing.php" target="_blank">Pricing</a></li>
                    <li><a href="signin.php" target="_blank">Signin</a></li>
                    <li><a href="signup.php" target="_blank">Signup</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Follow Us</h3>
                <ul class="social-icons">
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2024 your company. All rights reserved</p>
        </div>
    </footer>
    <!-- FOOTER ENDS -->
</body>
</html>