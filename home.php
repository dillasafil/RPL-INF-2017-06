

<html>
<head>
	<title>HOME</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
}

h2 {
	color: black;
	text-align: center;
    font-family: century gothic;
	font-weight: bold;
    font-size: 20px;
}

h2:hover{
	color: white;	
}

p{
	font-family: century gothic;
	color: white
}

img{
	width: 50px;
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
<<<<<<< HEAD
	}

  #popup1 {
=======
}
	
.tb1{
	padding: 10px 20px;
	background-color: rgba(3, 7, 10, 0.23);
	margin: 0 auto;
	width: 1000px;
	height: 500px;
}
.tb1:hover{
	background-color: rgba(5, 17, 20, 0.60);
	
}

#popup {
>>>>>>> muhammad_syuhada
	width: 100%;
	height: 100%;
	position: fixed;
	background: rgba(0,0,0,.7);
	top: 0;
	left: 0;
	z-index: 9999;
	visibility: hidden;
}

#popup1:target {
	visibility: visible;
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
	margin: 0 auto;
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

.navbar-atas{
				background:rgba(209, 209, 209, 0.05);
			}
			.navbar-brand{
				color:white;
			}
			.navbar-brand:hover{
				color:rgb(59, 198, 138);
			}
			
</style>
</head>
<body>

<nav class="navbar navbar-atas">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand"><span class="glyphicon glyphicon-home"></span>Home</a>
					<a href="daftar.php" class="navbar-brand"></span>SIGN UP<a>
					<a href="#" class="navbar-brand"></span>SIGN IN<a>
				</div>
				
			</div>
		</nav>
		
<h1>Parking Application</h1>

<h2>Find your own shortcut, for a better and easier life</h2>
<br><br>

<section class="content">
	<div  class="tb">
		<a class = "text" href="">Profile</a>
<<<<<<< HEAD

		<a class = "text" href="">Isi saldo</a>
			 
		<a class = "text" href="#popup1">Cek saldo</a>
			<div id="popup1">
				<div class="box">
					<a href="#" class="close-button" title="Close">cancel</a>
					<h2>SALDO ANDA</h2><!-- database belum siap, coding php untuk pemanggilan database belum bisa dibuat-->
						<a></a>
					<input placeholder="saldo" class="boxform"  required><br><br>
									
				</div>
			</div>
		<a class = "text" href="">Bayar Iuran</a>
			
=======
		
		<a class = "text" href="#popup">Isi saldo</a>
			 <div id="popup">
				<div class="box">
					<a href="#" class="close-button" title="Close">tutup</a>
					<h2>ISI SALDO ANDA</h2>
						<form  action='process_sign_up.php' method='post'>
							<input placeholder="Nama Rekening" class="boxform"  required><br><br>
							<input placeholder="No. Rekening" class="boxform"  required><br><br>
							<input placeholder="Jenis Bank" class="boxform"  required><br><br>
							<input placeholder="Jumlah Saldo" class="boxform" required><br><br>
							<input type="password" name="password" placeholder="Password Anda" class="boxform"  required><br><br>
							<input class="button" name="submit" type="submit" value="ISI" />
						</form>
					</div>
				</div>
				
		<a class = "text" href="#popup1">Cek saldo</a>
		<a class = "text" href="#popup2">Bayar Iuran</a>
		<a class = "text" href="#popup2">Bayar Parkir</a>
>>>>>>> muhammad_syuhada
	</div>
	<br>

	<div class="tb1"><p>ABOUT<br><br>AAAAAAAAAAAAAAAAAAAAA<br>BBBBBBBBBBBBBBBBBBB<br>CCCCCCCCCCCCCCC</div>
	
	<br>
			<a class="social" href = /> <img src="img/fb.png"/></a>
			<a class="social" href = /><img src="img/tw.png"/></a>
			<a class="social" href = /><img src="img/ig.png"/></a>
			<a class="social" href = /><img src="img/yt.png"/></a>
			<a class="social" href = /><img src="img/g+.png"/></a>
		
</section>
	
</body>
</html>