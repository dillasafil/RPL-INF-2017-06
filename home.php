

<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="style.css"/>

<style>
	
	h1 {
    color: white;
    text-align: center;
	font-family: Harrington;
	font-size: 48px;
	font-weight: normal;
}
p {
	color: white;
	text-align: center;
    font-family:French Script MT;
	font-weight: bold;
    font-size: 30px;
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
		background-image: url("1.jpg");
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
	
#popup {
	width: 100%;
	height: 100%;
	position: fixed;
	background: rgba(0,0,0,.7);
	top: 0;
	left: 0;
	z-index: 9999;
	visibility: hidden;
}

#popup:target {
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
	right: 140px;	
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


   
</style>
</head>

<br><br>
<h1>Parking Application</h1>

<p>Find your own shortcut, for  a better life and easier</p><br><br>

<body>
	<section class="content">
	<div  class="tb">
		<a class = "text" href="">Profile</a>
		<a class = "text" href="#popup">Isi saldo</a>
			 <div id="popup">
				<div class="box">
				<a href="#" class="close-button" title="Close">cancel</a>
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
				
	</div>

</section>
	
</body>
</html>