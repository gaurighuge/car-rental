<?php
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$host ='localhost';
		$username ='root';
		$password ='';
		$db_name ='id18841404_booking';
		$pickup=$_POST["pickup"];
		$returnl=$_POST["returnl"];
		$pickupdate=$_POST["pickupdate"];
		$returndate=$_POST["returndate"];
		$pickt = $_POST["pickuptime"];
		$dropt = $_POST["returntime"];
		$fullname = $_POST["fullname"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];

		$con = mysqli_connect($host, $username, $password, $db_name);

		if(isset($con)) 
		{
			$sql="insert into booking (pickup, returnl, pickupdate, returndate, pickt, dropt, fullname, email, phone) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";
			$stmt=$con->prepare($sql);
			$stmt->bind_param("sssssssss", $pickup, $returnl, $pickupdate, $returndate, $pickt, $dropt, $fullname, $email, $phone);
			$result=$stmt->execute();

			require('fpdf184/fpdf.php');
			$pdf = new FPDF();
			$pdf -> AddPage();
			$pdf -> SetFont('Arial', 'B', 20);
			$pdf -> Cell(190, 15, 'Rental Receipt', 1, 1, 'C');
			$pdf -> Cell(200, 15, ' ', 0, 1, 'C');
			$pdf -> SetFont('Arial', 'I', 16);
			$pdf -> Cell(200, 10, 'Pickup Location: '.$pickup, 0, 1, 'L');
			$pdf -> Cell(200, 10, 'Return Location: '.$returnl, 0, 1, 'L');
			$pdf -> Cell(200, 10, 'Pickup Date: '.$pickupdate, 0, 1, 'L');
			$pdf -> Cell(200, 10, 'Pickup Time: '.$pickt, 0, 1, 'L');
			$pdf -> Cell(200, 10, 'Return Date: '.$returndate, 0, 1, 'L');
			$pdf -> Cell(200, 10, 'Return Time: '.$dropt, 0, 1, 'L');
			$pdf -> Cell(200, 10, 'Name: '.$fullname, 0, 1, 'L');
			$pdf -> Cell(200, 10, 'Email ID: '.$email, 0, 1, 'L');
			$pdf -> Cell(200, 10, 'Phone Number: '.$phone, 0, 1, 'L');
			$pdf -> Cell(200, 15, ' ', 0, 1, 'C');
			$pdf -> Cell(200, 15, ' ', 0, 1, 'C');
			$pdf -> Cell(200, 15, ' ', 0, 1, 'C');
			$pdf -> Cell(200, 15, ' ', 0, 1, 'C');
			$pdf -> Cell(200, 15, ' ', 0, 1, 'C');
			$pdf -> Cell(200, 15, ' ', 0, 1, 'C');
			$pdf -> Cell(200, 15, 'Thank you for choosing our website! Hope to see you again.', 0, 1, 'C');
			$pdf -> Output('D', 'receipt.pdf');

		} 
	}
?>