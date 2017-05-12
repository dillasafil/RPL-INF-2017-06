<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Pendaftaran</title>
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
	font-size: 20px;
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
			$database="parkir";
	
			$connect=mysqli_connect($host, $username, $password, $database) or die ("Gagal terkoneksi kedatabase");
	
			$Nama	    =$_POST["Nama"];
			$Email	    =$_POST["Email"];
			$Nomor_HP   =$_POST["Nomor_HP"];
			$Password   =$_POST["Password"];

	
				
	
			mysqli_query($connect, "insert into daftar(Nama, Email, Nomor_HP, Password)values('$Nama', '$Email', '$Nomor_HP', '$Password')");
   
		?>
			<center>
			</br>
			<div>
			<strong><font face="verdana" size="15px" color="white">Pendaftaran Berhasil</font></strong>
			<p>
				Pendaftaran ini dilakukan atas nama:
				<?php echo $_POST['Nama'];?>.
				Dengan email:
				<?php echo $_POST['Email'];?>.
				Nomor_HP:
				<?php echo $_POST['Nomor_HP'];?>.
		
			</p>
			<br>
			<a href="http://localhost/parkir/"><center><img src="img/back.png" style="width:40px;height:25px;" border="0px";></a>
			</div>
			</center>
		
		<justify></justify>
</body>
</center>
</html>