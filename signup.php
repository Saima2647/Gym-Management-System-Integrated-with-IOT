<?php require('connection/connection.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
  body {
 background-image: url("images/trainer-bg.jpg");
}
  
  </style>
  
  </head>
  <body>


 
 <div class="card bg-light mx-auto mt-4" style="width: 40rem;">
   <?php
 if (isset($_POST['submitbtn'])) 
 {
	
	 $username_var = $_POST['username'];
	 $email_var = $_POST['email'];
	 $contact_var = $_POST['contact'];
	 $password_var= sha1($_POST['password']);
	 
	 $sql = "INSERT INTO users (username, email, contact, password)
            VALUES ('$username_var', '$email_var', '$contact_var', '$password_var')";
		$result = $conn->query($sql);
		
		if($result)
		{
			echo "<center>User successfully registered. Thank you!<center>";
		}
		else
		{
			echo "<center>Something went wrong.<center>";
		}
	 
 }
 
 ?>
 <form class="mx-auto w-50" action="" method="POST">
 <h1 class="display-3 text-center mb-4">GoldGym <br>Sign Up</h1>
 <div class="mb-3">
    <label for="exampleInputUsername" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" required id="exampleInputUsername" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" required id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputContact" class="form-label">Contact</label>
    <input type="tel" class="form-control" name="contact" required id="exampleInputContact" autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" required id="exampleInputPassword" autocomplete="off">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary mb-4" name="submitbtn" >Submit</button>
  <hr>
  <p class="text-center">Already a user? <a href="signin.php">Sign In</a></p>
</form>
</div>


<!-- CONTACT US ENDS -->
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>