<?php
	$conn=new mysqli ("localhost","root","","projectrpl");
	
	$name = $_POST['name'];
	$norek = $_POST['norek'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	$sql="UPDATE tukang_parkir set nama='$name', no_rek='$norek', password='$pass' WHERE email='$email'";
	
	$result=$conn->query($sql);
	
	if($result){
		echo "yes";
	}else{
		echo "no";
	}
?>