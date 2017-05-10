<?php
	$conn=new mysqli ("localhost","root","","projectrpl");
	if(!$conn){
		echo'<h1>Error database</h1>';
	}else{
		$nama = $_POST['nama'];
		$norek = $_POST['norek'];
		$email = $_POST['email'];
		$pass = $_POST['pwd'];
		$tgl = $_POST['birthday'];
		$gender = $_POST['gender'];
		
		$sql="INSERT INTO tukang_parkir VALUES('$nama','$norek','$email','$pass','$tgl','$gender')";
		$res = $conn->query($sql);
		if($res){
			echo"Berhasil Mendaftar";
		}else{
			echo"Gagal mendaftar!";
		}
	}
?>