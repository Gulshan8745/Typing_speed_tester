<?php
	$Fullname = $_POST['Fullname'];
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$Phonenumber = $_POST['Phonenumber'];
	$Password = $_POST['Password'];
	$ConfirmPassword = $_POST['ConfirmPassword'];

	//Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn-> connect_error) {
		die('connection failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registration(Fullname,Username,Email,Phonenumber,Password,ConfirmPassword) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiss",$Fullname,$Username,$Email,$Phonenumber,$Password,$ConfirmPassword);
		$stmt->execute();
		echo "registration is done Successfully...."
		$stmt->close();
		$conn->close();
	}
?>