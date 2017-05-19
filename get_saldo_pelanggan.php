<?php 
	$conn=new mysqli ("localhost","root","","projectrpl");
	$email='a@sd';
	$sql="SELECT jumlah_saldo FROM pelanggan where email='$email'";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_assoc($res)){
		$saldo=$row['jumlah_saldo'];
	}
	echo'<p>jumlah saldo : '.$saldo.'</p>';
?>