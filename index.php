<?php require('connection/connection.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoldGym</title>
	<link rel="shortcut icon" href="images/gg.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
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
          <a class="nav-link" aria-current="page" href="#carouselExampleAutoplaying">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#contactusfrm">Contact</a>
        </li>
 	<li class="nav-item">
          <a class="nav-link" aria-current="page" href="gallery.php">Photo Gallery</a>
        </li>
 	<li class="nav-item">
          <a class="nav-link" aria-current="page" href="#reviews">Reviews</a>
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
         <li><a class="dropdown-item" href="heartbeat.php" target="_blank">Live Heart Rate Tracking</a></li>


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

<!-- CAROUSEL STARTS -->
<div id="carouselExampleAutoplaying" class="carousel slide mt-4" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="images/bckg1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/bckg3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- CAROUSEL ENDS -->
<hr>
<!-- ABOUT US STARTS -->
<section id="aboutus" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">About us</h1>
                        <div class="line"></div>
                        <p>Welcome to GoldGym, where fitness meets technology. We are more than just a gym; we're a community committed to transforming lives. Our cutting-edge technology boasts top-notch equipment, personalized training, and dynamic classes to suit every fitness goal,with our constant heart rate tracking helps to monitor health and performance levels.Whether you're a seasoned athlete or a beginner, GoldsGym is your fitness home—where determination fuels results, and every drop of sweat brings you closer to your best self. Join us and thrive!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ABOUT US ENDS -->
   <hr>
 <!-- CONTACT US STARTS -->

 <hr>
 <center>
 <div class="card bg-light mb-4" style="width: 40rem;" id="contactusfrm">
 <?php
 if (isset($_POST['submitcon'])) 
 {
	
	 $user_var = $_POST['username'];
	 $mail_var = $_POST['email'];
	 $num_var = $_POST['contact'];
	 $message_var= $_POST['message'];
	 
	 $sql = "INSERT INTO contactus (username, email, contact, message)
            VALUES ('$user_var', '$mail_var', '$num_var', '$message_var')";
		$result = $conn->query($sql);
		
		if($result)
		{

      echo "<script>
      window.location.href = \"index.php\";
      </script>";
		}
    else
		{
			echo "<center>Something went wrong.<center>";
		}
	 
 }

 ?>
 <form class="mx-auto w-70" action="#" method="POST">
 <h1 class="display-3 text-center" style="font-weight: 700;">Contact Us</h1><br>
 <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputUsername" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputContact" class="form-label">Contact</label>
    <input type="tel" class="form-control" name="contact" id="exampleInputContact" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputMessage" class="form-label">Message</label>
    <textarea type="text" class="form-control" name="message" id="exampleInputMessage" autocomplete="off"></textarea>
  </div>
  
  
  <button type="submit" class="btn btn-primary mb-2" name="submitcon" >Submit</button>
</form>
</div>
</center>
<!-- CONTACT US ENDS -->
<!--Reviews start-->
<section id="reviews" class="section-padding bg-light">
<div class="testimonial-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="section-header text-center">
						<h4>Testimonials</h4>
						<h2>What our members say</h2>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="carousel slide" data-bs-ride="true" id="carouselExampleIndicators">
						<div class="carousel-indicators">
							<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
						</div>
						<div class="carousel-inner">
							<div class="carousel-item active">						
								<div class="content text-center">
									<div class="person"><img alt="" src="images/bb5.jpg"></div>
									<h5>Amit Sharma</h5>
									<h6>Web Developer</h6>
									<p>Joining this gym was a game-changer for me! The trainers are incredibly knowledgeable and supportive, creating personalized workouts that keep me motivated. The positive atmosphere and state-of-the-art facilities make it a top-notch fitness experience.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="content text-center">				
									<div class="person"><img alt="" src="images/bb3.png"></div>
									<h5>Mohit Arora</h5>
									<h6>Graphics Designer</h6>
									<p>I've tried several gyms, but this one stands out. The variety of classes keeps things exciting, and the staff genuinely cares about your progress. From the moment I walked in, I felt welcomed, and now, I can't imagine my fitness journey without this amazing community.</p>
								</div>
							</div>
							<div class="carousel-item">
								<div class="content text-center">
									<div class="person"><img alt="" src="images/g6.png"></div>
									<h5>Ria Gupta</h5>
									<h6>UI/UX Designer</h6>
									<p>I'm not a fitness enthusiast, but this gym changed my perspective. The staff's friendliness and the range of equipment available make working out enjoyable. The clean and spacious environment adds to the overall experience. I'm proud of the progress I've made, thanks to the guidance and support from this fantastic gym.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Reviews end-->
<br><br>
<!--FOOTER-->
<footer>
        <div class="container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email:goldgym@gmail.com</p>
                <p>Phone:01149970000</p>
                <p>Address:New Delhi</p>
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
                 <li><a href=""><i class="fab fa-facebook"></i></a></li>
                 <li><a href=""><i class="fab fa-twitter"></i></a></li>
                 <li><a href=""><i class="fab fa-instagram"></i></a></li>
                 <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                </ul>
                </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2024 your company . All rights reserved</p>
        </div>
    </footer>

<!--FOOTER ENDS-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>