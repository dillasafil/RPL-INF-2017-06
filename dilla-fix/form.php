<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action="hasil.php" method="post">
	<h2><i class="fa fa-user"></i>Form Pembayaran</h2>
	<br/>
	<div class="form-group">
		<input name="nama" type="text" class="input-mode" placeholder="Bayar atas nama..."">
	</div>
	<div class="form-group">
	<input name ="plat" type="text" class="input-mode" placeholder="Nomor Seri Kendaraan...">
	</div>
	<div class="form-group">
	<input name="rekening" type="text" class="input-mode" placeholder="Nomor Rekening...">	
	</div>
	<div class="form-group">
	<input name="id" type="text" class="input-mode" placeholder="ID Petugas Parkir...">	
	</div>
	<br/>
	<div class="select">
		<select name="bayar"  class="texbox" value="<?php $_POST['rpl']?>">
			<option value="2000">Mobil---------------------[Rp. 2000]</option>
			<option value="1000">Sepeda motor--------[Rp. 1000]</option>
			<option value="3000">Mobil Truk-------------Rp. 3000]</option>
			<option value="500">Sepeda-----------------Rp. 500]</option>
			<option value="1500">Becak-------------------Rp. 1.500]</option>
		</select>
	</div>
	<br/>
	<div class="form-group">
		<button class="btn btn-submit">send &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
	</div>
	<br/>

	</form>

	<!--Design By AgusTutorial-->
</body>
</html>