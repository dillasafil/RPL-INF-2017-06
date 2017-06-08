<?php session_start();?>
<html>
<head>
	<title>HOME</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		
<style>
	
h1 {
    color: black;
    text-align: center;
	font-family: Colonna MT;
	font-size: 53px;
	font-weight: normal;
}
h1:hover{
	color: white;
	text-decoration: none;
}

h2 {
	color: black;
	text-align: center;
    font-family: century gothic;
	font-weight: normal;
    font-size: 30px;
}

h2:hover{
	color: white;	
}

p{
	font-family: century gothic;
	font-size: 30px;
	color: white;
}

img{
	
	height: 25px;
}
img:hover{
		transition: all 0.3s;
		transform: scale(1.5);
		}
.text{
	text-decoration: none;
	font-size: 20px;
    font-family: century gothic;
    text-transform: uppercase;
	color: white;
	padding: 10px 20px;
	color:white;
}
.text:hover{
	border-top: 2px solid white;
	background-color: black;
	border-bottom: 2px solid white;
}
body {
		background-image: url("img/1.jpg");
		font-family: Arial, Helvetica, sans-serif;
}
.content{	
		text-align: center;
}

.tb{
	padding: 10px 20px;
	background-color: rgba(5, 17, 20, 0.60);
	margin: 0 auto;
	width: 1000px;
}
	
.tb1{
	padding: 10px 20px;
	background-color: rgba(3, 7, 10, 0.23);
	margin: 0 auto;
	width: 1000px;
	height: 500px;
	color: white;
	font-size: 25px;
}
.tb1:hover{
	background-color: rgba(5, 17, 20, 0.60);
	
}

.popup {
	width: 100%;
	height: 100%;
	position: fixed;
	background: rgba(0,0,0,.7);
	top: 0;
	left: 0;
	z-index: 9999;
	display: none;
}

.popup:target {
	display: block;
}
 
.button{
	font-family: century gothic;
    color:white;
    text-decoration: none;
    letter-spacing: px;
    border: 0px solid;
    padding: 12px 26px;
    font-size: 15px;
    margin: 0 10px;
	border-radius: 15px;
	background-color: gray;
}
.button:hover{
	color: black;

}

.close-button {
	text-decoration: none;
	position: absolute;
	bottom: -18px;
	right: 150px;	
	font-family: century gothic;
    color:white;
    font-size: 15px;
  	}
.close-button:hover {
	color: black;
}

.box{ 
	border: 2px solid;
	color: white;
	letter-spacing: 2px;
    font-size: 15px;
  	width: 350px;
	color: gray;
	position: relative;
	border-bottom-width: 20px;
	border-top-width: 10px;
	border-radius: 20px;
	margin: 10% auto;
}

.boxform{ 
	border:  transparent;
	font-size: 15px;
	padding: 12px 26px;
	margin: 0 5px 0px;	
	border-radius: 10px;
}
.boxform:hover{
	color:black;
	border: 2px solid;
}

.boxdel{
	border: 2px solid;
	color: white;
	letter-spacing: 2px;
    font-size: 15px;
  	width: auto;
	color: gray;
	position: relative;
	border-radius: 20px;
	margin: 10% auto;
	background: rgba(0,0,0,.7);
}

</style>
<script>
	$(document).ready(function(){
		$('#isi-saldo').submit(function(){
			$.ajax({
				type: 'POST',
				url: 'isi_saldo.php',
				data: $('#isi-saldo').serialize(),
				success: function(hasil){
					if(hasil=='yes'){
						if(hasil=='berhasil'){
							$('#s , #d').val('');
						}
					}else{
						alert(hasil);
					}
				}
			});
			return false;
		});
		
		$('#sld').click(function(){
			$.ajax({
				url: 'cek.php',
				success:function(html){
					$('#saldo').html(html);
				}
			});
		});
	});
</script>
</head>
<body>
<br>
<h1>Parking Application</h1>
<h2>Find your own shortcut, for a better and easier life</h2>

<section class="content">
	<div  class="tb">
		<a class = "text"> <!--href="#profile"-->Profile</a>
		<a class = "text" href="#isisaldo">Isi saldo</a> 		
		<a id="sld" class = "text" href="#cek1">Cek saldo</a>
		<a class = "text" href="#bayar1">Bayar Parkir</a>
		<a class = "text" href="#komentar">Komentar</a>
		<a href="#delete" style="float:left;"><img src="img/trash.png" title="delete your account" />
		<a href="logout_plg.php" style="float:right;"><img src="img/logout.png" title="logout" /></a>
	</div>
	<br>
	
	<div id="delete" class="popup">
				<div class="boxdel">
				<p>APA ANDA YAKIN INGIN MENGHAPUS AKUN ANDA ?</p>
				<a class="button" href="delete.php" name="submit" type="submit">YA</a>
				<a class="button" href="#" name="submit" type="submit">TIDAK</a><br><br><br><br>
				</div>
				</div>
				
	<div id="isisaldo" class="popup">
				<div class="box">
					<a href="#" class="close-button" title="Close">tutup</a>
					<p>ISI SALDO ANDA</p>
						<form  id="isi-saldo" method='post'>
							<input placeholder="Jumlah Saldo" name="saldo" id="s" class="boxform" required><br><br>
							<input type="password" name="pass" placeholder="Password Anda" id="d"class="boxform"  required><br><br>
							<input class="button" name="submit" type="submit" value="ISI" />
						</form>
					</div>
				</div>
					
	<div id="cek1" class="popup">
					<div class="box" id="saldo">
																
					</div>
			</div>
	
	<div id="bayar1" class="popup">
				<div class="box">
				<a href="#" class="close-button" title="Close">cancel</a>
				<p>ISI DATA ANDA</p>
					<form  action='berhasil.php' method='post'>
						<input name="nama" placeholder="Nama" class="boxform"  required><br><br>
						<input name="plat" placeholder="Plat Kendaraan" class="boxform"  required><br><br>
						<input name="rekening" placeholder="No. Rekening" class="boxform"  required><br><br>
						<input name="id" placeholder="ID Petugas Parkir" class="boxform" required><br><br>
							<select name="bayar"  class="boxform" value="<?php $_POST['rpl']?>">
								<option value="2000">Mobil---------------------[Rp. 2000]</option>
								<option value="1000">Sepeda motor--------[Rp. 1000]</option>
								<option value="3000">Mobil Truk-------------Rp. 3000]</option>
								<option value="500">Sepeda-----------------Rp. 500]</option>
								<option value="1500">Becak-------------------Rp. 1.500]</option>
							</select><br><br>
						<input class="button" name="submit" type="submit" value="ISI" />
					</form>
				</div>
			</div>	
		
	 <div id="komentar" class="popup">
				<div class="box">
				<a href="#" class="close-button" title="Close">cancel</a>
				<p>ISI KOMENTAR ANDA</p>
					<form  action='komen.php' method='post'>
						<input name="name" placeholder="Nama" class="boxform"  required><br><br>
						<textarea name="komen" placeholder="Komentar" class="boxform"></textarea><br><br>
						<input class="button" name="submit" type="submit" value="ISI" />
					</form>
				</div>
			</div>
			

		<?php include 'profil.php'?>
		
		
		

	
	<br>
		<div  class="tb">copyright &copy; 2017 all right reserved
		</div>

		<br>
			<a class="social" href = /> <img src="img/fb.png"/></a>
			<a class="social" href = /><img src="img/tw.png"/></a>
			<a class="social" href = /><img src="img/ig.png"/></a>
			<a class="social" href = /><img src="img/yt.png"/></a>
			<a class="social" href = /><img src="img/g+.png"/></a>
			
			<a href="logout_plg.php" style="float:right;"><img src="img/trash.png" />
		
</section>
	
</body>
</html>