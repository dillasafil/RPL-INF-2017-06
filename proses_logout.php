<?php
session_start();
session_destroy();
unset($_SESSION['email_tkp']);
header("location:utama.php");
?>