<?php
    $host ='localhost';
    $username ='root';
    $password ='';
    $db_name ='id18841404_booking';

    $name=$_POST["name"];
    $email=$_POST["email"];
    $msg=$_POST["message"];

    $con = mysqli_connect($host, $username, $password, $db_name);

    if(isset($con)) 
    {
        $sql="insert into reviews (name, email, review) values (?, ?, ?)";
        $stmt=$con->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $msg);
        $result=$stmt->execute();
        header('Location: contact.html');
    }
?>