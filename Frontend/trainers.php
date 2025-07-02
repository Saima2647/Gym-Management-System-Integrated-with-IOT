<?php
require('connection/connection.php'); // Database connection
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Trainers - GoldGym</title>
    <link rel="shortcut icon" href="images/gg.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- NAVBAR STARTS -->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #0c64e8;">GoldGym (India's First Smart Gym)</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#aboutus">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#contactusfrm">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Photo Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#reviews">Reviews</a></li>
                <li class="nav-item"><a class="nav-link" href="trainers.php">Our Trainers</a></li>
            </ul>
            <a href="signin.php" class="btn btn-primary">Sign In</a>
        </div>
    </div>
</nav>
<!-- NAVBAR ENDS -->

<!-- OUR TRAINERS SECTION STARTS -->
<div class="container mt-5">
    <h1 class="text-center display-4"style="text-align: left;">Meet Our Trainers</h1>
    
    <div class="row mt-4">
    
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- Manually Added Trainers -->
                
                <div class="col">
                    <div class="card">
                        <img src="images/bb2.jpeg" class="card-img-top" alt="Alex King">
                        <div class="card-body">
                            <h5 class="card-title">Alex King</h5>
                            <p class="card-text">Certified Personal Trainer</p>
                            <p class="card-text"><small class="text-muted">5 years of experience</small></p>
                        </div>
                    </div>
                </div>
                 <div class="col">
                    <div class="card">
                        <img src="images/bb4.jpeg" class="card-img-top" alt="Emma Taylor">
                        <div class="card-body">
                            <h5 class="card-title">Emma Taylor</h5>
                            <p class="card-text">Pilates Instructor</p>
                            <p class="card-text"><small class="text-muted">4 years of experience</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="images/bb3.jpeg" class="card-img-top" alt="Lisa Smith">
                        <div class="card-body">
                            <h5 class="card-title">Lisa Smith</h5>
                            <p class="card-text">Yoga and Wellness Coach</p>
                            <p class="card-text"><small class="text-muted">6 years of experience</small></p>
                        </div>
                    </div>
                </div>
            <div class="col">
                    <div class="card">
                        <img src="images/bb5.jpg" class="card-img-top" alt="John Doe">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">Strength and Conditioning Specialist</p>
                            <p class="card-text"><small class="text-muted">8 years of experience</small></p>
                        </div>
                    </div>
                </div>   
            </div>
        </div>

    
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card bg-light p-4">
                <h2 class="text-center mb-4">Enroll Yourself as a Trainer</h2>
                <?php
                if (isset($_POST['submitTrainer'])) {
                    $name_var = $_POST['name'];
                    $mobile_var = $_POST['mobile_no'];
                    $email_var = $_POST['email_id'];
                    $expertise_var = $_POST['expertise'];
                    $experience_var = $_POST['experience'];
                    
                    $sql = "INSERT INTO trainer (name, mobile_no, email_id, expertise, experience) 
                            VALUES ('$name_var', '$mobile_var', '$email_var', '$expertise_var', '$experience_var')";
                    $result = $conn->query($sql);
                    
                    if($result) {
                        $submissionMessage = "<p class='text-success mt-2'>Submitted successfully.</p>";
                    } else {
                        $submissionMessage = "<p class='text-danger mt-2'>Something went wrong.</p>";
                    }
                }
                ?>
                
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile_no" class="form-label">Mobile No</label>
                        <input type="tel" class="form-control" name="mobile_no" id="mobile_no" required>
                    </div>
                    <div class="mb-3">
                        <label for="email_id" class="form-label">Email ID</label>
                        <input type="email" class="form-control" name="email_id" id="email_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="expertise" class="form-label">Expertise</label>
                        <input type="text" class="form-control" name="expertise" id="expertise" required>
                    </div>
                    <div class="mb-3">
                        <label for="experience" class="form-label">Experience (years)</label>
                        <input type="number" class="form-control" name="experience" id="experience" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100" name="submitTrainer">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- OUR TRAINERS SECTION ENDS -->

<!-- FOOTER STARTS -->
<footer>
    <div class="container">
        <div class="footer-content">
            <h3>Contact Us</h3>
            <p>Email: goldgym@gmail.com</p>
            <p>Phone: 01149970000</p>
            <p id="footerAddress">Address: New Delhi</p>
        </div>
        <div class="footer-content">
            <h3>Quick Links</h3>
            <ul class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Event and Gallery</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="signin.php">Sign In</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </div>
        <div class="footer-content">
            <h3>Follow Us</h3>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/login.php/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJteCI6IjIifQ%3D%3D%22%7D" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/login" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="bottom-bar">
        <p>&copy; 2024 GoldGym. All rights reserved</p>
    </div>
</footer>
<!-- FOOTER ENDS -->
<script src="address.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
