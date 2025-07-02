<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
  body {
 background-image: url("images/trainer-bg.jpg");
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
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="locationDropdown">
    Our Locations
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item location-item" href="#" data-address="Karol Bagh, New Delhi">Karol Bagh</a></li>
    <li><a class="dropdown-item location-item" href="#" data-address="Patel Nagar, New Delhi">Patel Nagar</a></li>
    <li><a class="dropdown-item location-item" href="#" data-address="Rajouri Garden, New Delhi">Rajouri Garden</a></li>
    <li><a class="dropdown-item location-item" href="#" data-address="Vasant Kunj, New Delhi">Vasant Kunj</a></li>
  </ul>
</li>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Facilities
         </a>
         <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="heartbeat.php" >Live Heart Rate Tracking</a></li>


           <li><a class="dropdown-item" href="#">24x7 App Support</a></li>
           <li><a class="dropdown-item" href="#">Nutritionists on Call</a></li>
          <li><a class="dropdown-item" href="#">Locker Facility</a></li>
          <li><a class="dropdown-item" href="trainers.php">Our Trainers</a></li>
    </ul>
</li>
     
       
      </ul>
    </div>
  </div>
</nav>
<!-- NAVBAR ENDS -->
 
 <div class="card bg-light mx-auto mt-4" style="width: 40rem;">
  
 <form class="mx-auto w-50" action="signin_process.php" method="POST">
 <div style="text-align: center; margin-top: 80px;">
 <h1 class="display-3 text-center mb-4">GoldGym <br>Sign In</h1>
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword"  class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword" >
  </div>
  
  
  
  <button type="submit" class="btn btn-primary mb-4" name="submitbtn">Submit</button>
  </form>
  <hr>
  <p class="text-center">Not a member? <a href="pricing.php">Sign Up</a></p>

</div>


<!-- CONTACT US ENDS -->
   
<script src="address.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>