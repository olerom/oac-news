<?php
session_start();
if(!$_SESSION['admin']) die ("Доступ закрыт");
session_destroy();
?>
<html>
<head>
<title>Administrator tools</title>
<link href="../css/admin.css" type="text/css" rel="stylesheet">
</head>
<body>
<center>
<table cellpadding="0" cellspacing="0" id="wrap"><tr><td align="center">
<table cellpadding="0" cellspacing="0">
<tr><td class="loginbox1" align="center">Enter acces</td></tr>
<tr><td class="loginbox2" align="center"><a href="../">Вернуться на главную страницу скрипта</a></td></tr>
</table>
</td></tr></table>
</center>
</body>
</html>