<?php
	session_start();
	session_destroy();
	setcookie('USER_ID', "", time() - 1, "/");
	header("location: ../index.php");
	exit();
?>