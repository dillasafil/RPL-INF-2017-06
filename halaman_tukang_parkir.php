<?php
	session_start();
	if(!isset($_SESSION['email_tkp'])){
		header('location:utama.php');
	}else{
		$conn=new mysqli ("localhost","root","","projectrpl");
		$email=$_SESSION['email_tkp'];
		$sql="SELECT * FROM tukang_parkir where email='$email'";
		$res=$conn->query($sql);
		while($row=mysqli_fetch_assoc($res)){
			$no=$row['no_rek'];
			$nama_tkp=$row['nama'];
			$id_tkp=$row['id_tukang_parkir'];
			$password=$row['password'];
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
	</head>
	<style>
		html, body {
			height: 100%;
		}
		body{
			background:url('1.jpg');
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
		#saldo{
			left:0px;
		}
		#sld{
			color:white;
		}
		.user{
			margin-top:6px;
			padding:8px 10px;
		}
		
		.box{ 
			border: 2px solid;
			letter-spacing: 1px;
			border-bottom-width: 20px;
			border-top-width: 10px;
			border-radius: 20px;
			padding-top:10px;
			left:-40px;
			background:rgba(0, 0, 0, 0.5);
		}
		.box label{
			color:white;
		}
		@media only screen and (min-width: 600px){
			.box{
				left:0px;
			}
		}
		@media only screen and (min-width: 300px){
			.box{
				left:0px;
			}
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
		.close-button {
			text-decoration: none;
			position: absolute;
			bottom: -18px;
			right: 140px;	
			font-family: century gothic;
			color:white;
			font-size: 15px;
		}
		.close-button:hover {
			color: black;
		}
		
		.box-popup{ 
			border: 2px solid;
			letter-spacing: 2px;
			font-size: 15px;
			width: 360px;
			color: gray;
			position: relative;
			border-bottom-width: 20px;
			border-top-width: 10px;
			border-radius: 20px;
			text-align:center;
			background:rgba(107, 118, 118, 0.57);
			margin: 0 auto;
			margin-top:15%;
		}
		.box-popup h1{
			font-family:none;
			color:black;
		}
		.table{
			font-size:13px;
		}
	</style>
	<script>
		$(document).ready(function(){
			$(".navbar-nav a").click(function(){
				var target = $(this).attr('href');
				if(target=='#saldo'){
					$.ajax({
					   url: 'get_saldo.php',
					   success: function(html) {
						  $("#sld").html(html);
					   }
					});
				}
				$('#main > div').not(target).hide();
				$(target).fadeIn(300);
			});
			
			$('[data-toggle="tooltip"]').tooltip();
			
			$('[data-toggle="popover"]').popover({
				html : true,
				content: '<div class="text-center"><a id="#profil" href="#profil" onClick="viewProfil(this.id)">Profil</a><br><a href="proses_logout.php">Log Out</a></div>',
			});	
			
			$('#change').submit(function(){
				$.ajax({
					type: 'POST',
					url: 'edit_akun_tkp.php',
					data: $('#change').serialize(),
					success: function(hasil){
						if(hasil="yes"){
							$("#notif").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">&times;</button>Berhasil diubah!</div>');
							function load(){
								$("#profil").load('profil_tkp.php');
							}
							setTimeout(load,1000);
						}else{
							alert(hasil);
						}
					}
				});
				return false;
			});
			
			$('#send').submit(function(){
				var nama = $('#send #namarektu').val();
				$.ajax({
					type: 'POST',
					url: 'bayar_iuran.php',
					data: $('#send').serialize(),
					success: function(hasil){
						if(hasil=='gagal'){
							alert('Saldo Tidak Cukup!');
						}else if(hasil!='no'){
							$('#rek').text(hasil);
							$('#namarek').text(': '+nama);
							$('#popup').show();
							$('#norektu').val('');
							
						}else{
							alert(hasil);
						}
					}
				});
				return false;
			});
			$('#close').click(function(){
				$('#popup').hide();
				return false;
			});
		});
		function viewProfil(id){
			$('#main > div').not(id).hide();
			$(id).fadeIn(300);
		}
		function check(){
			return confirm('Apakah ingin menghapus akun ?');
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
						<span class="glyphicon glyphicon-user"></span> <span class="glyphicon"><?php echo $nama_tkp;?></span> <span class="caret"></span>
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
			<div id="main" class="container-fluid" style="height: 64%; margin-top:-10px;">
				<div id="saldo" class="col-md-4 col-md-offset-4 text-center box">
					<div id="sld">
					</div>
				</div>
				<div id="info" >
					<div class="col-sm-8 col-sm-offset-1">
						<h1>info</h1>
					</div>
					
				</div>
				<div id="bayar">
					<?php include'form_bayar_iuran.php';?>
						
				</div>
				<div id="profil">
					<?php include'profil_tkp.php';?>
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
							<form id="change">
								<div class="form-group">
									<label for="name">Nama : </label>
									<input type="text" name="name" id="name" class="form-control" value="<?php echo $nama_tkp;?>" id="name" required>
									<label for="norek">Nomor Rekening :</label>
									<input type="text" name="norek" id="norek" class="form-control" value="<?php echo $no;?>" id="user" required>
									<label for="email">Email :</label>
									<input type="email" name="email" id="email" class="form-control" value="<?php echo $email;?>" id="email" readOnly required>
									<label for="pass">Password :</label>
									<input type="password" name="pass" id="pass" class="form-control" value="<?php echo $password;?>" id="pass" required></br>
									<span id="notif"></span>
									<input type="submit" name="submit" value="Change" class="btn btn-primary btn-block">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			<?php include'popup_berhasil.php';?>
			
		</div>
	</body>
</html>
