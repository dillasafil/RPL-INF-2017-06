<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<style>
			body{
				background-image:url(https://ak6.picdn.net/shutterstock/videos/13557335/thumb/1.jpg);
				background-attachment:fixed;
				background-size:cover;
				margin:0;
			}
			.navbar-atas{
				background:rgba(209, 209, 209, 0.05);
			}
			.navbar-brand{
				color:white;
			}
			.navbar-brand:hover{
				color:rgb(59, 198, 138);
			}
			#popup {
				width: 100%;
				height: 100%;
				position: fixed;
				background: rgba(0,0,0,.7);
				top: 0;
				left: 0;
				z-index: 9999;
				display:none;
			}
			.box-popup{ 
				border: 2px solid;
				border-left:4px solid;
				border-right:4px solid;
				letter-spacing: 2px;
				font-size: 15px;
				width: 360px;
				color: grey;
				position: relative;
				border-bottom-width: 20px;
				border-top-width: 10px;
				border-radius: 20px;
				text-align:center;
				background:rgba(0, 0, 0, 0.5);
				margin: 0 auto;
				margin-top:15%;
			}
			.box-popup h4{
				font-family:none;
				color:#fffff;
			}
		</style>
		<script>
			$(document).ready(function(){
				$('#signup').validator().on('submit', function (e) {
				  if (e.isDefaultPrevented()) {
					//invalid form do something...
				  } else {
					$.ajax({
						type : 'POST',
						url : 'proses_daftar.php',
						data : $('#signup').serialize(),
						success : function(hasil){
							if(hasil="yes"){
								$('#popup').show();
								function alihkan(){
									document.location="halaman_tukang_parkir.php";
								}
								setTimeout(alihkan,3000);
							}
						}
					});
				  }
				  return false;
				});
			});
		</script>
	</head>
	<body>
		<nav class="navbar navbar-atas">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="utama.php" class="navbar-brand"><span class="glyphicon glyphicon-home"></span> Home</a>
				</div>
			</div>
		</nav>
	
		<div class="container">
			<div style="padding:0px; margin:0 auto; overflow:hidden; width:400px; background:#E8F0f0;">
				<div style="height:60px; overflow:hidden; padding:0px 0px 0px 25px; background:rgb(59, 198, 138);">
					<h3 style="color:white;"><i class="fa fa-address-book"></i> Sign Up</h3> 
				</div>
					<form id="signup" data-toggle="validator" role="form" class="form-horizontal" style="margin:10px; padding:15px; background:white;">
					  <div class="form-group has-feedback">
						<label class="control-label col-sm-2" for="nama">Name</label>
						<div class="col-sm-offset-1 col-sm-9">
						  <input type="text" class="form-control" pattern="^[_A-z]{4,}$" id="nama" name="nama" placeholder="Enter name" required>
						  <span class="glyphicon form-control-feedback"></span>
						</div>
					  </div>
					  <div class="form-group has-feedback">
						<label class="control-label col-sm-2" for="norek">No_Rek</label>
						<div class="col-sm-offset-1 col-sm-9">
						  <input type="text" class="form-control" pattern="^[_0-9]{9,}$" id="norek" name="norek" placeholder="Enter NO Rek" required>
						  <span class="glyphicon form-control-feedback"></span>
						</div>
					  </div>
					  <div class="form-group has-feedback">
						<label class="control-label col-sm-2" for="email">Email</label>
						<div class="col-sm-offset-1 col-sm-9"> 
						  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
						  <span class="glyphicon form-control-feedback"></span>
						</div>
					  </div>
					  <div class="form-group has-feedback"> 
						<label class="control-label col-sm-2">Password</label>
						<div class="col-sm-offset-1 col-sm-9">
						  <input type="password" class="form-control" data-minlength="6" name="pwd" id="pwd" placeholder="Password" required>
						  <span class="glyphicon form-control-feedback"></span>
						</div>
					  </div>
					  <div class="form-group has-feedback"> 
						<label class="control-label col-sm-2">No_Hp</label>
						<div class="col-sm-offset-1 col-sm-9">
						  <input type="text" class="form-control" pattern="^[_0-9]{9,}$" name="nope" id="nope" placeholder="Nomor Hp" required>
						  <span class="glyphicon form-control-feedback"></span>
						</div>
					  </div>
					  <div class="form-group has-feedback"> 
						<label class="control-label col-sm-2">Birthday</label>
						<div class="col-sm-offset-1 col-sm-9">
						  <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Password" required>
						  <span class="glyphicon form-control-feedback"></span>
						</div>
					  </div>
					  <div class="form-group has-feedback"> 
						<label class="control-label col-sm-2">Gender</label>
						<div class="col-sm-offset-1 col-sm-9" style="padding-top:7px;">
							<input type="radio" name="gender" value="Perempuan" required>Female
							<input type="radio" name="gender" value="Laki-Laki" required>Male
						</div>
					  </div>
					  <div class="form-group"> 
						<div class="col-sm-offset-3 col-sm-9">
						  <button type="submit" class="btn" style="background:#1aa570; color:white;"><i class="fa fa-check-circle"></i> Sign Up</button>
						</div>
					  </div>
					</form>
				</div>
			</div>
		</div>
		
		<div id="popup">
			<div class="box-popup">
				<div>
					<h4>Pendaftaran Anda Berhasil, Tunggu Sebentar!</h4>
					<img src="alihkan.gif" width="70px" height="70px"><br>
				</div>
			</div>
		</div>
		
		<footer class="navbar-default text-center" style="position:absolute; top:91%; left:0; width:100%; z-index:1;margin-top:px;padding-top:20px; height:60px; overflow:hidden;">
			 copyright <i class="fa fa-copyright"></i> 2017 all right reserved
		</footer>
	</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>