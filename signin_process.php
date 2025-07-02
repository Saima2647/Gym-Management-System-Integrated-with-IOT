<?php
session_start();
?>
 <?php
 require('connection/connection.php');
 if (isset($_POST['submitbtn'])) 
 {
	
	 $email_var = $_POST['email'];
	 $password_var= sha1($_POST['password']);
	 
	 $sql = "Select * from users where  email = '".$email_var."' and password = '".$password_var."'";
	 $result = $conn->query($sql);

							if ($result->num_rows > 0) {
							  // output data of each row
							  while($row = $result->fetch_assoc()) {
								$_SESSION["gold_username"] = $row['username'];
								  $_SESSION["gold_email"] = $row['email'];
								  $_SESSION["gold_contact"] = $row['contact'];
								  $_SESSION["gold_id"] = $row['userid'];
								  
								  echo "
								  <script>
								  window.location.href = \"home.php\";
								  </script>
								  ";
								}
							}
							else{
								 echo "
								  <script>
								  alert(\"Invalid username or password\");
								  window.location.href = \"signin.php\";
								  </script>
								  ";
								
							}
							
							
							
	
	 
 }
 
 ?>