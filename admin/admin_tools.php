<?php
session_start();
if(!$_SESSION['admin']) die ("Доступ закрыт");
?>

<html>
<head>
<title>Administrator tools</title>
<link href="../img/favicon.jpg" rel="icon" type="image/jpg" />
<link href="../css/admin.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="logo1">
	<header>
		<div style="height: 30px;width:100%;background : rgba(0, 0, 0, 0.45); "></div>
	</header>
	<table  cellspacing="25" cellpadding="0"  border="0" align="center" style="margin-bottom:;">
		<tr>
			<td><a href="admin_main.php" class="header1"><div>Add News</div></a></td>
			<td><a href="admin_delete.php" class="header1"><div>Delete News</div></a></td>
			<td><a href="admin_edit.php" class="header1"><div>Edit News</div></a></td>
		</tr>
	</table>
</div>
</body>
</html>