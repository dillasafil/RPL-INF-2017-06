<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Pendaftaran</title>
	<style type="text/css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
		*{
	box-sizing:border-box;
	margin:0 auto;
}
body{
	background-image: url('img/cover register.jpg');
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
			$No_Rek		=$_POST["No_Rek"];
			$Birthday	=$_POST["Birthday"];
			$JK			=$_POST["JK"];
	
				
			$sql="insert into daftar(nama,email,nomor_hp,password,no_rek,birthday,jk)VALUES('$Nama', '$Email', '$Nomor_HP', '$Password', '$No_Rek', '$Birthday','$JK')";
			$res=$connect->query($sql);
				echo'<center>
			</br>
			<div>
			<strong><font face="verdana" size="15px" color="white">Pendaftaran Berhasil</font></strong>
			<p>
				<tr><td>Pendaftaran ini dilakukan atas nama:</td>
				<td>'.$Nama.'</td></tr><br>
				<tr><td>Dengan email: </td>
				<td>'.$Email.'</td></tr><br>
				<tr><td>Nomor HP: </td>
				<td>'.$Nomor_HP.'</td></tr><br>
				<tr><td>No Rekening: </td>
				<td>'.$No_Rek.'</td></tr><br>
				<tr><td>Birthday:</td>
				<td>'.$Birthday.'</td></tr><br>
				<tr><td>Jenis Kelamin:</td>
				<td>'.$JK.'</td></tr><br>
			</p>
			<br>
			<a href="http://localhost/utama.php"><center><img src="img/home.png" style="width:40px;height:40px;" border="0px";></a>
			</div>
			</center>';
			
			
		?>
		
		
		<justify></justify>
</body>
</center>
</html>