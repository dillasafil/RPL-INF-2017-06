<?php
	session_start();
	$email=$_SESSION['email_tkp'];
	$conn=new mysqli ("localhost","root","","projectrpl");
	$sql="SELECT jumlah_saldo FROM tukang_parkir where email='$email'";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_assoc($res)){
		$saldo=$row['jumlah_saldo'];
	}
	echo'<h3>Saldo Anda</h3>';
	echo'<p>jumlah saldo : '.$saldo.'</p>';
?>