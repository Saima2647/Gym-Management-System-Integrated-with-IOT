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
 
<br>
 
 <div class="card bg-light mx-auto mt-4" style="width: 40rem;">
  
 <form class="mx-auto w-50" action="signin_process.php" method="POST">
 <h1 class="display-3 text-center mb-4">GoldGym <br>Sign In</h1>

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
   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>