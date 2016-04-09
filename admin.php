<?php
	include ("config.php");
	session_start();
	if (!$_SESSION['login'] AND !$_SESSION['pass'])
	{
?>
<html>
<head>
<title>Order &amp; Chaos Online</title>
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="css/style.css" type="text/css" rel="stylesheet"> 
</head>
<body>
	<header>
		<div align="center">
			<a href="http://oac-news.com/"><img src="img/logo_left.png"></a>
		</div>
	</header>
	<div class="auth_form">
		<form action="admin/auth_action.php" method="post" style="margin:0">
			<input name="login" type="textbox" placeholder="Login">
			<input name="pass" type="password" placeholder="Password">
			<input name="submit" type="submit" value="Enter">
		</form>
	</div>
	
	
	
	
</body>
</html>
<?php
}
else
{?>
<html>
<head>
<title>Order &amp; Chaos Online</title>
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="css/style.css" type="text/css" rel="stylesheet"> 
</head>
<body>
	<header>
		<div align="center">
			<a href="http://oac-news.com/"><img src="img/logo_left.png"></a>
		</div>
	</header>
	<div><a href=""> add news</a></div>
	
	
	
</body>
</html>
<?php
}
?>
