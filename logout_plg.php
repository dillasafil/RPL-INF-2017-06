<?php
	session_start();
	session_unset($_SESSION['email_plg']);
	session_destroy();
	header('location:utama.php');
?>