<?php
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
	$host = 'localhost';
	$username = 'root';
	$pwd = '';
	$db_name = 'id18841404_booking';
	$user = $_POST['username'];
    $email = $_POST['email'];
	$pass = $_POST['password'];
    $confirm = $_POST['confirm'];

	$con = mysqli_connect($host, $username, $pwd, $db_name);
     if($pass === $confirm) 
     {
        $query = "INSERT into user values('$user', '$email', '$pass')";
        $result = mysqli_query($con, $query);
        if ($result == 1) 
        {
            header('Location: user.html');
        }
        else 
        {
            header('Location: signup.html');
        }
     }
     }
?>