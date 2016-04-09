<?php
	include ("../config.php");
	
	
	
	
	
	$login = ($_POST['login']);
	$pass = ($_POST['pass']);
	
	if ($login==ADMIN_LOGIN AND $pass==ADMIN_PASS)
	{ 
		$_SESSION ['login'] = $login;
		$_SESSION ['pass'] = $pass;
		echo "<html><head><meta http-equiv='refresh'; content='0; URL=../admin.php'></head></html>";
	
	
	}
?>