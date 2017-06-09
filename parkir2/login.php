<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Masuk </title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action="konek.php" method="post">
	<h2><i class="fa fa-user"></i>Form Masuk</h2>
	<br/>
	
	<div class="form-group">
		<input name="Email" type="text" class="input-mode" placeholder="Email Anda">
	</div>
	<div class="form-group">
		<input name="Password" type="text" class="input-mode" placeholder="Password" required>
	</div>
	
	
	<div class="form-group">
		<button class="btn btn-submit">Send &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
	</div>
	<br/>

	</form>

</body>
</html>