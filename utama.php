

<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
		
<style>
	
h1 {
    color: white;
    text-align: center;
	font-family: DFPOP1-W9;
	font-size: 75px;
	font-weight: bold;
}

h2 {
	color: white;
	text-align: center;
    font-family: Tempus Sans ITC;
	font-weight: normal;
    font-size: 30px;
}

img{
	position: relative;
	 
	height: 25px;
	}
img:hover{
		transition: all 0.3s;
		transform: scale(1.5);
		}

body {
		background-image: url("img/4.jpg");
		background-size: 100%;
		font-family: Arial, Helvetica, sans-serif;
		color: white;
}
.section{
	text-align: center;
	
}

.tb{
	text-decoration: none;
	font-size: 20px;
    font-family: century gothic;
	color: white;
	padding: 10px 20px 10px 20px;
	color: white;
	background-color: rgba(5, 17, 20, 0.60);
	margin: auto 10px;
	border-radius: 3px;
}
.tb:hover{
	border: 1.5px solid white;
	background-color: rgba(3, 7, 10, 0.60);	
}

.popup {
	margin: 50px 0px;
	
	display: none;
	
}
.popup:target {
	display: block;
}

.boxform{ 
	color:black;
	border: 2px solid;
	font-size: 15px;
	padding: 5px 5px;
	border-radius: 2px;
}


.button{
		font-family: century gothic;
		color:white;
		text-decoration: none;
		letter-spacing: px;
		border: 0px solid;
		padding:6px 6px;
		font-size: 15px;
		margin: 0 10px;
		border-radius: 2px;
		background-color: rgba(3, 7, 10, 0.60);	

}
.button:hover{
		background-color: black;
		border: 1px solid white;

}
.box{
	padding: 15px 0px;
	background-color: rgba(5, 17, 20, 0.60);
	margin: 0 auto;
	width: 500px;
	border-radius: 5px;
}
.text{
	text-decoration: none;
	font-size: 30px;
    font-family: century gothic;
	color: white;	
}
			
</style>
<script>
	$(document).ready(function(){
		$('#login-tkp').submit(function(){
			$.ajax({
				type: 'POST',
				url: 'proses_login_tkp.php',
				data: $('#login-tkp').serialize(),
				success: function(hasil){
					if(hasil=='yes'){
						document.location='halaman_tukang_parkir.php';
					}else{
						alert(hasil);
					}
				}
			});
			return false;
		});
		
		$('#login-plg').submit(function(){
			$.ajax({
				type: 'POST',
				url: 'proses_login_pelanggan.php',
				data: $('#login-plg').serialize(),
				success: function(hasil){
					if(hasil=='yes'){
						document.location='home.php';
					}else{
						alert(hasil);
					}
				}
			});
			return false;
		});
	});
</script>
</head>
<body>
<br><br><br><br>
<h1>Park App</h1>
<h2>Find your own shortcut for a better and easier life</h2>

<section class="section">

	<br><br>
	<div class='box'>
	<a class="text btn" href="#petugas">PETUGAS</a>
	<a class ="text">|</a>
	<a class="text btn" href="#pelanggan">PELANGGAN</a>
	</div>
	
	<div  id="pelanggan" class="popup">
		<div class="box"><p class="text">PELANGGAN</p><br>
	<a class="tb btn" href="daftar.php">SIGN UP</a>	
		<a class="tb btn" href="#" data-toggle="modal" data-target="#myModal">SIGN IN</a>	
		<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Sign In</h4>
			</div>
			<div class="modal-body">
				<form  id="login-plg" method='post'>
					<input placeholder="Email" class="boxform" name="email" required><br><br>
					<input type="password"  placeholder="Password" name="pass" class="boxform"  required>
			        
        <div class="modal-footer">
          <input class="button" name="submit" type="submit" value="Login" />
        </div>
		</form>
      </div>
    </div>
 </div>
</div>
</div>
</div>


	
	<div  id="petugas" class="popup">
		<div class="box"><p class="text">PETUGAS</p><br>
	<a class="tb btn" href="halaman_daftar_tkp.php">SIGN UP</a>	
	<a class="tb btn" href="#" data-toggle="modal" data-target="#petugas1">SIGN IN</a>	
	
	<div class="modal fade" id="petugas1" role="dialog">
		<div class="modal-dialog modal-sm">
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Sign In</h4>
			</div>
			<div class="modal-body">
			<form method='post' id="login-tkp">
					<input placeholder="Email" class="boxform" name="email"  required><br><br>
					<input type="password" name="pass" placeholder="password" class="boxform"  required>
			       
			
			<div class="modal-footer">
			  <input class="button" name="submit" type="submit" value="Login" />
			</div>
			</form> 
		  </div>
		</div>
		</div>
	</div>
		</div>
</div>
	
		</section>
			<center><br>	
				<a class="social" href = /> <img src="img/fb.png"/></a>
				<a class="social" href = /><img src="img/tw.png"/></a>
				<a class="social" href = /><img src="img/ig.png"/></a>
				<a class="social" href = /><img src="img/yt.png"/></a>
				<a class="social" href = /><img src="img/g+.png"/></a>
			</center>
		

	
</body>
</html>