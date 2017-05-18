<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<style>
		html, body {
			height: 100%;
		}
		h1{
			font-size:40px;
			font-family: Colonna MT;
		}
		h4{
			font-family: century gothic;
		}
		#saldo,#bayar,#profil{
			display:none;
		}
		
		#saldo div{
			background:gray;
			letter-spacing: 2px;
			border-bottom-width: 20px;
			border-top-width: 10px;
			border-radius: 20px;
		}
		.user{
			margin-top:6px;
			padding:8px 10px;
		}
	</style>
	<script>
		$(document).ready(function(){
			$(".navbar-nav a").click(function(){
				var target = $(this).attr('href');
				$('#main > div').not(target).hide();
				$(target).fadeIn(300);
			});
			
			$('[data-toggle="tooltip"]').tooltip();
			
			$('[data-toggle="popover"]').popover({
				html : true,
				content: '<div class="text-center"><a id="#profil" href="#profil" onClick="viewProfil(this.id)">Profil</a><br><a href="logout.php">Log Out</a></div>',
			});	
		});
		function viewProfil(id){
			$('#main > div').not(id).hide();
			$(id).fadeIn(300);
		}
	</script>
	<body>
		<div class="container" style="height: 100%;">
			<div class="text-center">
				<h1>Parking Application</h1>
				<h4>Find your own shortcut, for a better and easier life</h4>
			</div>
			<nav class="navbar navbar-inverse" role="navigation">
				<div class="container-fluid">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav" style="float:left;">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
					<a href="#" class="btn btn-default pull-right user" data-trigger="focus" data-toggle="popover" data-placement="bottom">
						<span class="glyphicon glyphicon-user"></span> <span class="glyphicon">User</span> <span class="caret"></span>
					</a>
					<div class="navbar-header">
					</div>
					<div id="nav" class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="#info">Informasi Tranksaksi</a></li>
							<li><a href="#saldo">Cek Saldo</a></li>
							<li><a href="#bayar">Bayar Iuran</a></li>
						</ul>
					</div>
				</div>
			</nav>
			<div id="main" class="container-fluid" style="height: 63%; margin-top:-10px;">
				<div id="saldo" class="col-md-4 col-md-offset-4 text-center">
					<div>
						<h3>Saldo Anda</h3>
						<?php include'get_saldo.php'?>
					</div>
				</div>
				<div id="info">
					info
				</div>
				<div id="bayar">
					bayar
				</div>
				<div id="profil">
					profil
					<?php include"profil.php";?>
				</div>
			</div>
			<footer class="navbar navbar-inverse text-center" style="color:white; padding-top:15px;">
				 copyright &copy; 2017 all right reserved
			</footer>
			
			<div id="edit" class="modal fade">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h3>Update Profil</h3>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="name">Nama : </label>
								<input type="text" name="name" id="name" class="form-control" value="<?php echo $nama;?>" id="name" required>
								<label for="user">Nomor Rekening :</label>
								<input type="text" name="user" id="user" class="form-control" value="<?php echo $no_rek;?>" id="user" required>
								<label for="email">Email :</label>
								<input type="email" name="email" id="email" class="form-control" value="<?php echo $email;?>" id="email" required>
								<label for="pass">Password :</label>
								<input type="password" name="pass" id="pass" class="form-control" value="<?php echo $password;?>" id="pass" required></br>
								<span id="notif"></span>
								<input type="submit" name="submit" value="Change" class="btn btn-primary btn-block">
							</div>
						</div>
					</div>
				<div>
			</div>
			
		</div>
	</body>
</html>