<?php
	session_start();
	$conn=new mysqli ("localhost","root","","projectrpl");
	$email = $_SESSION['email_tkp'];
	
	$sql = "DELETE FROM tukang_parkir WHERE email='$email'";
	$result = $conn->query($sql);
	
	if($result){
		header('location:proses_logout.php');
	}else{
		echo "no";
	}
	
?>