<?php
	$conn=new mysqli ("localhost","root","","projectrpl");
	
	$sql="SELECT * FROM komentar";
	$res = $conn->query($sql);
	
	while($row = mysqli_fetch_assoc($res)){
		$text=$row['komen'];
		$nama=$row['email'];
		
		echo '<div class="komen-box">
				<span>'.$nama.' said:</span><br>
				'.$text.'
			</div>';
	}
	echo'<div class="push"></div>';
?>