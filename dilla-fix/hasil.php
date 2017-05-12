<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Pembayaran</title>
	<style type="text/css">
		*{
	box-sizing:border-box;
	margin:0 auto;
}
body{
	background-image: url('img/1.jpg');
}
div{
	background-color: lightgrey;
	width: 700px;
	border: 25px solid black;
	padding: 25px;
	margin: 25px;
	text-align: justify;
}
p{
	font-size: 30px;
	font-family: forte;
	font-weight: bold;
	color: white;
}
	</style>
}
</head>
<body>
		 <?php
   
			$host="localhost";
			$username="root";
			$password="";
			$database="rpl";
	
			$connect=mysqli_connect($host, $username, $password, $database) or die ("Gagal terkoneksi kedatabase");
	
			$nama	    =$_POST["nama"];
			$plat	    =$_POST["plat"];
			$rekening   =$_POST["rekening"];
			$id         =$_POST["id"];
			$bayar      =$_POST["bayar"];
	
				
	
			mysqli_query($connect, "insert into bayar(nama, plat, rekening, id, bayar)values('$nama', '$plat', '$rekening', '$id', '$bayar')");
   
		?>
			<center>
			</br>
			<div>
			<strong><font face="verdana" size="20px" color="white">~Transaksi Berhasil~</font></strong>
			<p>
				Transaksi ini dilakukan atas nama:
				<?php echo $_POST['nama'];?>.
				Dengan nomor seri kendaraan:
				<?php echo $_POST['plat'];?>.
				No. rekening:
				<?php echo $_POST['rekening'];?>.
				Dan dengan Id petugas Parkir:
				<?php echo $_POST['id'];?>
		    	Transaksi yang dilakukan adalah sebesar: RP
			    <?php echo $_POST['bayar'];?>.
			</p>
			<br>
			<a href="http://localhost/parkir/"><center><img src="img/back.png" style="width:100px;height:70px;" border="0px";></a>
			</div>
			</center>
		
		<justify></justify>
</body>
</center>
</html>