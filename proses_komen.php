<?php
	session_start();
	$conn=new mysqli ("localhost","root","","projectrpl");
	$email=$_SESSION['email_plg'];
	$komen=$_POST['komen'];
	
	$query="INSERT INTO komentar VALUES('$email','$komen')";
	$res=$conn->query($query);
	if($res){
		echo'<div class="komen-box">
				<span>'.$email.' said:</span><br>
				'.$komen.'
			</div>';
	}else{
		echo"no";
	}
?>