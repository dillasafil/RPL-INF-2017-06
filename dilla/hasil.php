<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu Utama</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	

	<style type="text/css">
body {
    background-image: url("abc.jpg");
}
div{
   		 border-radius: 5px;
   		 background-color: #d0f1f2;
  	     padding: 20px;
 		 width: 15%;
  		 font-family: Calibri;
   		 margin-left: 550px;
   		 margin-top: 250px;
}
	</style>

</head>
<body>
		<div>
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
			<table>
			<tr>
				<td>Nama</td>
				<td><?php echo $_POST['nama'];?></td>
			</tr>
			<tr>
				<td>Nomor seri kendaraan</td>
				<td><?php echo $_POST['plat'];?></td>	
			</tr>
			<tr>
				<td>No. rekening</td>
				<td><?php echo $_POST['rekening'];?></td>
			</tr>
			<tr>
				<td>id petugas Parkir</td>
				<td><?php echo $_POST['id'];?></td>
			</tr>
			<td>Harga Bayar</td>
			<td><?php echo $_POST['bayar'];?></td>
			</table>
			</center>
		</div>
		
</body>
</html>