<!DOCTYPE html>
<html lang="en">
<head>
	<title>Komentar</title>
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
	width: 400px;
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
	
			$name	    =$_POST["name"];
			$komen	    =$_POST["komen"];

			mysqli_query($connect, "insert into komentar(name, komen)values('$name', '$komen')");
   
		?>
<center>
<div>
			<strong><font face="verdana" size="20px" color="white">KOMENTAR</font></strong>
			<br>
			<?php
			$conn=new mysqli ("localhost","root","","rpl");
			$sql="SELECT * FROM komentar";
			$res=$conn->query($sql);
			while($row=mysqli_fetch_assoc($res)){
		$nama=$row['name'];
		$komentar=$row['komen'];
		echo'
						<table width="300">
								<tr>
									<td align=left>Nama</td>
									<td align=left>:</td>
									<td align=left>'.$nama.'</td><br>
								</tr>
								<tr>
									<td align=left>Komentar</td>
									<td align=left>:</td>
									<td align=left>'.$komentar.'</td><br>
								</tr>
						</table>';
								}
					
?>
	
	
	
			<br><a href="http://localhost/parkir/"><center><img src="img/back.png" style="width:100px;height:70px;" border="0px";></center></a>
</div>
</center>
</body>
</html>