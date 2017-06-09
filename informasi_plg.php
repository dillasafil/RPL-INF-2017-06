<?php
	if(!isset($_SESSION)){
		session_start();
	}
	$conn=new mysqli ("localhost","root","","projectrpl");
	$email=$_SESSION['email_plg'];
	
	$query="SELECT * FROM informasi_plg WHERE email='$email'";
	$res=$conn->query($query);
	while($row=mysqli_fetch_assoc($res)){
		$akt=$row['aktivitas'];
		$time=$row['time'];
		echo'<div class="inf" style="color:white;">Melakukan '.$akt.' <span class="pull-right">'.$time.'</span></div>';
	}
?>