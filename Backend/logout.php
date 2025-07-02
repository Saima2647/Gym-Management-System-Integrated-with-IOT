<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION["gold_id"])) {
    $user_id = $_SESSION["gold_id"];
    
    // Database connection (assuming it's already set up)
    $conn = new mysqli('localhost', 'root', '', 'golddb');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Update the last login date to the current timestamp
    $update_sql = "UPDATE users SET last_login_date = CURRENT_TIMESTAMP WHERE userid = $user_id";
    if ($conn->query($update_sql) === TRUE) {
        // Successfully updated last login date
        // Proceed with session unsetting and destroying
        session_unset();
        session_destroy();
        
        echo "<script>window.location.href = 'index.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

} else {
    // If no session is active, redirect to the login page or show an error
    echo "<script>window.location.href = 'signin.php';</script>";
}
?>
