<?php
	if(!isset($_SESSION)){
		session_start();
	}
	$conn=new mysqli ("localhost","root","","projectrpl");
	$email=$_SESSION['email_tkp'];
	
	$query="SELECT aktivitas,time FROM tukang_parkir join informasi_tkp on id=id_tukang_parkir WHERE email='$email'";
	$res=$conn->query($query);
	while($row=mysqli_fetch_assoc($res)){
		$akt=$row['aktivitas'];
		$time=$row['time'];
		echo'<div class="inf" style="color:white;">Melakukan '.$akt.' <span class="pull-right">'.$time.'</span></div>';
	}
?>