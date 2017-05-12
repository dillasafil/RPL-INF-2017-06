<?php
	
	include 'koneksi.php';

	$jumlah = $_POST['jumlah'];
	$namarek = $_POST['namarek'];
	$norek = $_POST['norek'];
	$jumlahdibayar = $_POST['jumlahdibayar'];
	$rekeningdituju = $_POST['rekeningdituju'];
	$jenisbank = $_POST['jenisbank'];
	
	

	$sql = "INSERT INTO bayar (jumlah,namarek,norek,jumlahdibayar,rekeningdituju,jenisbank) VALUES ('$jumlah','$namarek','$norek','$jumlahdibayar','$rekeningdituju','$jenisbank')";
	$hasil = mysqli_query($conn, $sql);

	if($hasil){
		echo 
		"---------------------------------------------------------------<br>";
		
		include 'ambil.php';
	}
	else {
		echo 'Transaksi Gagal';
		echo "Error: ".$sql.". ".mysqli_error($conn);
		
	}
	
?>