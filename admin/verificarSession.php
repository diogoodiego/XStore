<?php
	session_start();
	$sessaoLogin = $_SESSION['login'];
	if ($sessaoLogin == null) {
		header('location:../login.php');
	}
?>