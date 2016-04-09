<?php
	include ("../config.php");
?>

<html>
<head>
<title>Administrator tools</title>
<link href="../img/favicon.jpg" rel="icon" type="image/jpg" />
<link href="../css/admin.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div id="container_manager" align="center">
		<?php
			$sql = "SELECT * FROM news ORDER BY id DESC"; 
			$result = mysqli_query ($db, $sql);
			while($row = mysqli_fetch_array($result)) 
			{ 
			  echo'
					<table style="margin-left:100; margin-right:100; border-top: 1px solid #d5c29a;margin-bottom: 0;" cellspacing="0" cellpadding="20"  border="0">
						<tr>
							<td align="center">
								'.$row['tittle'].'
							</td>
						</tr>
						<tr>
							<td>
								'.$row['text'].'
							</td>
						</tr>
						<tr>
							<td><a href="delete_news_action.php?id='.$row['id'].'">Delete This Shitty News</a>
							</td>
						</tr>
					</table>
				';
			} 
		?>
	</div>
</body>
</html>