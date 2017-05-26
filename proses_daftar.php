<?php
	session_start();
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
		$telp = $_POST['nope'];
		
		$sql="INSERT INTO tukang_parkir(nama,no_rek,email,password,tanggal_lahir,jenis_kelamin,telp) VALUES('$nama','$norek','$email','$pass','$tgl','$gender','$telp')";
		$res = $conn->query($sql);
		if($res){
			$_SESSION['email_tkp']=$email;
			echo"yes";
		}else{
			echo"Gagal mendaftar!";
		}
	}
?>