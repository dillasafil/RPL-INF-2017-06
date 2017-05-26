<?php
	if(!isset($_SESSION)){
		session_start();
	}
	$conn=new mysqli ("localhost","root","","projectrpl");
	$email=$_SESSION['email_tkp'];
	$sql="SELECT * FROM tukang_parkir WHERE email='$email'";
	$res=$conn->query($sql);
	while($row=mysqli_fetch_assoc($res)){
		$nama=$row['nama'];
		$no_rek=$row['no_rek'];
		$email=$row['email'];
		$password=$row['password'];
		$tgl=$row['tanggal_lahir'];
		$gender=$row['jenis_kelamin'];
		$telp=$row['telp'];
	}
	
	echo'<div class="panel panel-default col-xs-6 col-xs-offset-3" style="padding:0px;">
			<div class="panel-heading">
				<h3 class="panel-title">Profil</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3 col-lg-3 " align="center"> 
						<img alt="User Pic" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLlSIpjmgsR7dbQk8UGns3745kk-5RDiIHmVMZ1f1gCkCBYYud" class="img-circle img-responsive"> 
					</div>
					<div class=" col-md-9 col-lg-9 "> 
						<table class="table">
							<tbody>
								<tr>
									<td>Nama</td>
									<td>'.$nama.'</td>
								</tr>
								<tr>
									<td>Nomor Rekening</td>
									<td>'.$no_rek.'</td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>'.$gender.'</td>
								</tr>	
								<tr>
									<td>Tanggal Lahir</td>
									<td>'.$tgl.'</td>
								</tr>
								<tr>
									<td>Email</td>
									<td><a href="mailto:info@support.com">'.$email.'</a></td>
								</tr>
								<tr>
									<td>Password</td>
									<td>'.$password.'</td>
								</tr>
								<tr>
									<td>Phone Number</td>
									<td>'.$telp.'</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
				<span class="pull-right">
					<span data-toggle="modal" data-target="#edit"><a data-original-title="Edit Akun" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a></span>
					<a data-original-title="Hapus Akun" href="proses_hapus.php" onclick="return check()" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
				</span>
			</div>
		</div>';
?>