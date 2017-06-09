<?php
	session_start();
	$conn=new mysqli ("localhost","root","","projectrpl");
	if(!$conn){
		echo'<h1>Error database</h1>';
	}else{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		$sql="SELECT * FROM tukang_parkir WHERE email='$email' AND password='$pass'";
		$res = $conn->query($sql);
		
		if(mysqli_num_rows($res)>0){
			$_SESSION['email_tkp']=$email;
			echo "yes";
		}else{
			echo "no";
		}
	}
?>