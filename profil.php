<?php
	$conn=new mysqli ("localhost","root","","projectrpl");
	$sql="SELECT * FROM tukang_parkir WHERE nama='parman'";
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
	
	echo'<div class="panel panel-info col-md-6 col-md-offset-3" style="padding:0px;">
			<div class="panel-heading">
				<h3 class="panel-title">Profil</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3 col-lg-3 " align="center"> 
						<img alt="User Pic" src="http://findicons.com/files/icons/61/dragon_soft/256/user.png" class="img-circle img-responsive"> 
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
					<a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
					<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
				</span>
			</div>
		</div>';
?>