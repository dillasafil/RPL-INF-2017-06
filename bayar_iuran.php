<?php
	session_start();
	$conn=new mysqli ("localhost","root","","projectrpl");
	if(!$conn){
		echo'<h1>Error database</h1>';
	}else{
		$email=$_SESSION['email_tkp'];
		
		$id = $_POST['id'];
		$jumlah = $_POST['juml'];
		$nama_rek = $_POST['namarektu'];
		$no_rek_tu = $_POST['norektu'];
		
		$saldo="SELECT jumlah_saldo FROM tukang_parkir WHERE email='$email'";
		$result=$conn->query($saldo);
		$row=mysqli_fetch_assoc($result);
		
		if($row['jumlah_saldo']<25000){
			echo'gagal';
		}else{
			$jml = $row['jumlah_saldo'];
			$jml = $jml-25000;
			$update="UPDATE tukang_parkir SET jumlah_saldo='$jml' WHERE email='$email'";
			$sql="INSERT INTO bayar_iuran VALUES('$id','$jumlah','$nama_rek','$no_rek_tu')";
			
			$res = $conn->query($sql);
			if($res){
				$conn->query($update);
				echo": ".$no_rek_tu;
			}else{
				echo"no!";
			}
		}
	}
?>