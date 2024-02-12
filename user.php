<?php
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
	$host = 'localhost';
	$username = 'root';
	$pwd = '';
	$db_name = 'booking';
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$con = mysqli_connect($host, $username, $pwd, $db_name);
     $query = "SELECT * from user where username ='$user' and password = '$pass'";
     $result = mysqli_query($con, $query);
     if ($result->num_rows > 0) 
     {
          header('Location: fleet.html');
     }
     else 
     {
          header('Location: signup.html');
     }
     }
?>