<?php
session_start();

// Check if user is logged in by checking session variable
if (empty($_SESSION["gold_email"])) {
    echo "Error! You are not logged in.";
    echo "<br><a href=\"signin.php\">Sign In</a>";
} else {
    // Fetch gender icon based on user gender stored in session
    $genderIcon = $_SESSION["gold_gender"] === "Male" ? "userpic.png" : "Female.jpeg";

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'golddb'); 
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $user_id = $_SESSION['gold_id']; 

    // Query to get the last login date from the users table
    $query = "SELECT last_login_date FROM users WHERE userid = ? ORDER BY last_login_date DESC LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $user_id); 
    $stmt->execute();
    $stmt->bind_result($last_login_date);
    $stmt->fetch();
    $stmt->close();

    // If no last login date is found, set the default date
    if (!$last_login_date) {
        $last_login_date = date('Y-m-d'); // Set to current date if no last login found
    }

    // Format the last login date as "Month Day, Year"
    $formatted_last_login_date = date("F j, Y", strtotime($last_login_date));

    // Now, you can use $formatted_last_login_date and $genderIcon for displaying
    echo "<h2>Welcome, " . $_SESSION["gold_username"] . "</h2>";
    echo "<p>Last Login: " . $formatted_last_login_date . "</p>";
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GoldGym - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      html { scroll-behavior: smooth; }
      body {
        background-color: #f4f4f9;
        font-family: 'Arial', sans-serif;
      }
      .navbar {
        background-color: #333;
      }
      .navbar-brand, .btn-primary {
        color: white;
      }
      .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
      .dashboard-section {
        margin-top: 40px;
      }
      .card-title {
        color: #333;
        font-weight: bold;
      }
      .card-text, h5 {
        color: #555;
      }
      .container {
        margin-bottom: 40px;
      }
      .main-card {
        padding: 20px;
        margin-bottom: 30px;
      }
      .iframe-container {
        border-radius: 10px;
        overflow: hidden;
        height: 300px;
      }
      .alert {
        display: none;
        padding: 15px;
        margin-top: 20px;
      }
      footer {
        text-align: center;
        padding: 20px;
        background-color: #333;
        color: white;
      }
    </style>
  </head>
  <body>
  
  <!-- NAVBAR STARTS -->
   <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">GoldGym</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          <form class="d-flex" role="search">
            <a href="logout.php" class="btn btn-primary me-2" type="submit">Logout</a>
          </form>
        </div>
      </div>
    </nav>
  <!-- NAVBAR ENDS -->
  
  <div class="container dashboard-section">
    <div class="row justify-content-center">
      <!-- User Info Card -->
      <div class="col-lg-4">
        <div class="card main-card text-center">
          <img src="images/<?php echo $genderIcon; ?>" class="card-img-top mx-auto mt-3" style="width: 120px; border-radius: 50%;" alt="User Profile Picture">
          <div class="card-body">
            <h5>Hello, <?php echo $_SESSION["gold_username"]; ?></h5>
            <p>This is your membership card.<br>Thanks for joining GoldGym!</p>
          </div>
        </div>
      </div>

      <!-- Training Info & Vitals -->
      <div class="col-lg-8">
        <div class="card main-card">
          <div class="row">
            <!-- Last Training Session Card -->
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Last Training Session</h5>
                <p><strong>Date:</strong> <?php echo $formatted_last_login_date; ?></p>
                <p><strong>Duration:</strong> 1 hour 30 minutes</p>
                <p><strong>Calories Burned:</strong> 450 kcal</p>
              </div>
            </div>
            <!-- Vitals Summary -->
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Your Vitals</h5>
                <p>During your last session:</p>
                <ul>
                  <li>Average Heart Rate: 85 bpm</li>
                  <li>Peak Heart Rate: 160 bpm</li>
                  <li>Cool Down Heart Rate: 80 bpm</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Heart Rate Graph -->
      <div class="col-lg-8 mt-4">
        <div class="card main-card">
          <div class="card-body">
            <h5 class="card-title">Heart Rate Over Time</h5>
            <div class="iframe-container">
              <!-- Embedded ThingSpeak Graph -->
              <iframe width="100%" height="100%" src="https://thingspeak.com/channels/2686254/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&type=line&update=15" frameborder="0"></iframe>
            </div>
          </div>
        </div>
      </div>

      <!-- Heart Rate Alert -->
      <div class="col-lg-8 mt-4">
        <div id="heartRateAlert" class="alert"></div> <!-- This is where the heart rate alerts will be shown -->
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 GoldGym. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="heart.js"></script>  
</body>
</html>


