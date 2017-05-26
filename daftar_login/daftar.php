<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Pendaftaran Parkir</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action="konek.php" method="post">
	<h2><i class="fa fa-user"></i>Form Pendaftaran Parkir</h2>
	<br/>
	<div class="form-group">
		<input name="Nama" type="text" class="input-mode" placeholder="Nama Anda">
	</div>
	<div class="form-group">
		<input name="Email" type="text" class="input-mode" placeholder="Email Anda">
	</div>
	<div class="form-group">
		<input name="Nomor HP" type="text" class="input-mode" placeholder="Nomor HP">	
	</div>
	<div class="form-group">
		<input name="Password" type="text" class="input-mode" placeholder="Password" required>
	</div>
	<div class="form-group">
		<input name="No_Rek" type="text" class="input-mode" placeholder="No Rekening">
	</div>
	<div class="form-group">
		<input name="Birthday" type="text" class="input-mode" placeholder="Birthday">
	</div>
	<div class="form-group">
		<center><input type="radio" name="JK" value="Laki-Laki" checked> Laki-Laki
			<input type="radio" name="JK" value="Perempuan" checked>Perempuan</input></center><br>
	
	
	<div class="form-group">
		<button class="btn btn-submit">Send &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
	</div>
	<br/>

	</form>

</body>
</html>