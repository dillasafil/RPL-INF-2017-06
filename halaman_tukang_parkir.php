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
		body{
			background-image:url("img/1.jpg");
		}
		h1{
			font-weight:bold;
			font-size:40px;
			font-family: Colonna MT;
		}
		h4{
			font-weight:bold;
			font-family: century gothic;
		}
		#saldo{
			background:gray;
			letter-spacing: 2px;
			border-bottom-width: 20px;
			border-top-width: 10px;
			border-radius: 20px;
			display:none;
		}
		.user{
			display:;
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
			
			$('[data-toggle="popover"]').popover({
				html : true,
				content: '<a href="akun.php">Account</a><br><a href="logout.php">Log Out</a>',
			});	
		});
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
					
					<a href="#" class="btn btn-default pull-right user" data-toggle="popover" data-placement="bottom">
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
			<div id="main" class="container-fluid" style="height: 60%; margin-top:-10px;">
				<div id="saldo" class="col-md-4 col-md-offset-4 text-center">
					<h3>Saldo Anda</h3>
					<?php include'get_saldo.php'?>
				</div>
				<div id="info">
				</div>
				<div id="bayar">
				</div>
			</div>
			<footer class="navbar navbar-inverse text-center" style="color:white; padding-top:15px;">
				 copyright &copy; 2017 all right reserved
			</footer>
		</div>
	</body>
</html>