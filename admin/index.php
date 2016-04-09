<?php
session_start();


if (!empty($_SESSION['admin']))
{
if ($_SESSION['admin'])
{
?>
<html>
<head>
<title>Administrator tools</title>
<link href="../css/admin.css" type="text/css" rel="stylesheet">
</head>
<body>
		<div align="center">
			<a href="http://oac-news.com/"><img src="../img/logo_left.png"></a>
		</div>
<center>
<table cellpadding="0" cellspacing="0" id="wrap"><tr><td align="center">
<table cellpadding="0" cellspacing="0">
<tr><td class="loginbox1" align="center">Enter access</td></tr>
<tr><td class="loginbox2" align="center"><a href="admin_tools.php">Go there!</a></td></tr>
</table>
</td></tr></table><img src="../img/testfooter.png" id="testfooter">
</center>
</body>
</html>
<?php
exit;
}
}

$_SESSION['admin'] = false;
include ('../config.php');

function not_logged_in()
{
echo '<html>
<head>
<title>Administrator tools</title>
<link href="../css/admin.css" type="text/css" rel="stylesheet">
</head>
<div class="testedlogo">
<body>
		<div align="center">
			<a href="http://oac-news.com/"><img src="../img/logo_left.png"></a>
		</div>
		<table  cellspacing="25" cellpadding="0"  border="0" align="center" style="margin-bottom:;">
			<tr>
				<td><a href="../news.php" class="header1"><div>News</div></a></td>
				<td><a href="../guides.php" class="header1"><div>Gameloft Store</div></a></td>
				<td><a href="../classes.php" class="header1"><div>Game Classes</div></a></td>
				<td><a href="../requests.php" class="header1"><div>Requests</div></a></td>
			</tr>
		</table>
<center>
<table cellpadding="0" cellspacing="0" id="wrap"><tr><td align="center" id="wraptd">
<table cellpadding="0" cellspacing="0">
<tr><td class="loginbox1" align="center">Administrator tools</td></tr>
<tr><td class="loginbox2" align="center">
<form action="index.php" method="post">
<input type="text" name="login" value="Name"><br>
<input type="password" name="password" value="Password"><br>
<input type="submit" value="Enter">
</form>
</td></tr>
</table>
</td></tr></table>
		<img src="../img/testfooter.png" id="testfooter">
</center></div>
</body>
</html>';
exit;
}

if(!$_POST) not_logged_in();
if(!$_POST['login']) not_logged_in();
if(!$_POST['password']) not_logged_in();
if($_POST['login'] != $adminlogin) not_logged_in();
if($_POST['password'] != $adminpassw) not_logged_in();

$_SESSION['admin'] = true;
?>
<html>
<head>
<title>Administrator tools</title>
<link href="../css/admin.css" type="text/css" rel="stylesheet">
<title>Order &amp; Chaos Online</title>
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
		<div align="center">
			<a href="http://oac-news.com/"><img src="../img/logo_left.png"></a>
		</div>
<center>
<table cellpadding="0" cellspacing="0" id="wrap"><tr><td align="center">
<table cellpadding="0" cellspacing="0">
<tr><td class="loginbox1" align="center">Enter access</td></tr>
<tr><td class="loginbox2" align="center"><a href="admin_tools.php">Go there!</a></td></tr>
</table><img src="../img/testfooter.png" id="testfooter">
</td></tr></table>
</center>
</body>

</html>