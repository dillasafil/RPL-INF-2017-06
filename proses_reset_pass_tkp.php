<?php
	$conn=new mysqli ("localhost","root","","projectrpl");
	if(!$conn){
		echo'<h1>Error database</h1>';
	}else{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$cpass = $_POST['cpass'];
		
		$sql="SELECT * FROM tukang_parkir WHERE email='$email'";
		$res = $conn->query($sql);
		if(mysqli_num_rows($res)>0){
			if($pass==$cpass){
				$query="UPDATE tukang_parkir set password='$pass' WHERE email='$email'";
				$result = $conn->query($query);
				
				if($result){
					echo'yes';
				}else{
					echo "no";
				}
			}else{
				echo'<div class="alert alert-danger text-left"><button type="button" class="close" data-dismiss="alert">&times;</button>konfirmasi password salah!</div>';
			}
		}else{
			echo'<div class="alert alert-danger text-left"><button type="button" class="close" data-dismiss="alert">&times;</button>Invalid email!</div>';
		}
		
	}
?>