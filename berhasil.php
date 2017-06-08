<html>
	<head>
		<style>
			body{
				/*background-image: url("3.jpg");*/
				background-color: rgb(49, 51, 44)
					
			}
	
			h1{
				font-family: Felix Titling;
				text-align: center;
				font-size: 55px;
				color: white;
				font-weight: normal;
			}
				
			
			img:hover{
				transition: all 0.3s;
				transform: scale(0.5);
			}
			
			p{
				font-family: century gothic;
				color: white;
				font-size: 25px;				
			}
			.content{
				text-align: center;
				
			}
		
			.tb{
				padding: 10px 20px;
				background-color: rgba(5, 17, 20, 0.60);
				margin: 0 auto;
				width: 500px;
				
			}
		
		
		</style>
	</head>
	
		<body>
		
		
		<?php
   
			$host="localhost";
			$username="root";
			$password="";
			$database="projectrpl";
	
			$connect=mysqli_connect($host, $username, $password, $database) or die ("Gagal terkoneksi kedatabase");
	
			$nama	    =$_POST["nama"];
			$plat	    =$_POST["plat"];
			$rekening   =$_POST["rekening"];
			$id         =$_POST["id"];
			$bayar      =$_POST["bayar"];
	
				
	
			mysqli_query($connect, "insert into bayar(nama, plat, rekening, id, bayar)values('$nama', '$plat', '$rekening', '$id', '$bayar')");
   
		?>
		
			<br>	
			<h1>TERIMA KASIH</h1>
				<div class="tb">
					<p>PEMBYARAN ANDA, TELAH BERHASIL<br><br>
						Atas nama :	<?php echo $_POST['nama'];?>.<br>
						Jenis kendaraan : <?php echo $_POST['plat'];?>.<br>
						No. seri kendaraan : <?php echo $_POST['plat'];?>.<br>
						Biaya parkir :   <?php echo $_POST['bayar'];?>.<br>
						Id petugas : <?php echo $_POST['id'];?><br></p>
				</div>
					<section class="content"><br><br>
						<a href="home.php" title="Close">
						<img src="img/s.png" height="200px"/></a>
						
					</section>			
			</body>
</html>