<?php
session_start();
require('connection/connection.php');  // Include the connection

if (isset($_POST['submitbtn'])) {
    $email_var = $_POST['email'];
    $password_var = sha1($_POST['password']);  // Encrypt the password with sha1
    
    // Query to check user credentials
    $sql = "SELECT * FROM users WHERE email = '".$email_var."' AND password = '".$password_var."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, set session variables
        while ($row = $result->fetch_assoc()) {
            $_SESSION["gold_username"] = $row['username'];
            $_SESSION["gold_email"] = $row['email'];
            $_SESSION["gold_contact"] = $row['contact'];
            $_SESSION["gold_id"] = $row['userid'];
            $_SESSION["gold_gender"] = $row['gender'];
            $_SESSION["last_login_date"] = $row['last_login_date'];

            echo "<script>window.location.href = \"home.php\";</script>";
        }
    } else {
        // Invalid login
        echo "<script>alert(\"Invalid username or password\"); window.location.href = \"signin.php\";</script>";
    }
}
?>
