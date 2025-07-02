<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <style> 
    .container-fluid {
      margin-top: 10px; 
    }
    .row {
      display: flex;
      flex-wrap: wrap;
      padding: 0.4px;
    }
  
  /* Create four equal columns that sits next to each other */
  .column {
    flex: 25%;
    max-width: 33.3%;
    padding: 0.4px;
  }
  
  .column img {
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s linear;
  }
  
  @media screen and (max-width: 800px) {
    .column {
      flex: 50%;
      max-width: 50%;
    }
  }
  
  /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
    .column {
      flex: 100%;
      max-width: 100%;
    }
  }
  </style>
  </head>
<body>
  <!-- NAVBAR STARTS -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#" style="color: #0c64e8;">GoldGym(India's First Smart Gym)</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php#carouselExampleAutoplaying">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php#aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php#contactusfrm">Contact</a>
        </li>
 	<li class="nav-item">
          <a class="nav-link" aria-current="page" href="gallery.php">Photo Gallery</a>
        </li>
 	<li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php#reviews">Reviews</a>
        </li>
	 <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Our Locations
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Karol Bagh</a></li>
            <li><a class="dropdown-item" href="#">Patel Nagar</a></li>
	<li><a class="dropdown-item" href="#">Rajouri Garden</a></li>
	<li><a class="dropdown-item" href="#">Vasant Kunj</a></li>
            
          </ul>
        </li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Facilities
         </a>
         <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="heartbeat.php">Live Heart Rate Tracking</a></li>


           <li><a class="dropdown-item" href="#">24x7 App Support</a></li>
           <li><a class="dropdown-item" href="#">Nutritionists on Call</a></li>
          <li><a class="dropdown-item" href="#">Locker Facility</a></li>
          <li><a class="dropdown-item" href="trainers.php">Our Trainers</a></li>
    </ul>
</li>
     
       
      </ul>
      <form class="d-flex" role="search">
        
        <a href="signin.php" class="btn btn-primary me-2" type="submit">Sign In</a>
      </form>
    </div>
  </div>
</nav>
<!-- NAVBAR ENDS -->
<center><h1 style="margin-top: 88px; margin-bottom: 4px;">Events & Gallery</h1></center><br>
  <div class="container-fluid">
    <div class="row">
      <div class="column">
        <img src="images/g1.jpeg">
        <img src="images/g2.jpeg">
        <img src="images/g3.jpeg">
        <img src="images/g4.jpg">
        <img src="images/g5.jpg">
      </div>
      <div class="column">
        <img src="images/g6.png">
        <img src="images/g7.jpeg">
        <img src="images/g8.png">
        <img src="images/g9.jpg">
        <img src="images/g10.jpg">
      </div>
      <div class="column">
        <img src="images/g11.jpg">
        <img src="images/g12.jpeg">
        <img src="images/g13.jpg">
        <img src="images/g14.jpg">
        <img src="images/g15.jpg">
      </div>
      <div class="column">
        <img src="images/g16.jpeg">
        <img src="images/g17.jpeg">
        <img src="images/g18.png">
        <img src="images/g19.jpg">
        <img src="images/g20.jpg">
      </div>
    </div>
  </div>
  <!--FOOTER-->
<footer>
        <div class="container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email:goldgym@gmail.com</p>
                <p>Phone:01149970000</p>
                <p id="footerAddress">Address:New Delhi</p>
            </div>
            <div class="footer-content">
                <h3>Quick Links</h3>
                 <ul class="list">
                    <li><a href="">Home</a></li>
                    <li><a href="gallery.php">Event and Gallery</a></li>
                    <li><a href="pricing.php">Pricing</a></li>
                    <li><a href="signin.php">Signin</a></li>
                    <li><a href="signup.php">Signup</a></li>
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
            <p>&copy; 2024 your company . All rights reserved</p>
        </div>
    </footer>

<!--FOOTER ENDS-->
<script src="address.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>